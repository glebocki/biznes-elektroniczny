package com.lazerycode.selenium.tests;

import com.lazerycode.selenium.DriverBase;
import com.lazerycode.selenium.page_objects.PrestashopPage;
import com.lazerycode.selenium.page_objects.ProductToCart;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.Select;
import org.openqa.selenium.support.ui.WebDriverWait;
import org.testng.annotations.Test;

import java.util.ArrayList;
import java.util.List;
import java.util.concurrent.TimeUnit;

public class PrestashopIT extends DriverBase {

    public static final String CART_BUTTON = "//*[@id=\"header\"]/div[3]/div/div/div[3]/div/a";
    public static final String SEARCH = "//*[@id=\"search_query_top\"]";
    public static final String FOUND_PRODUCT = "//*[@id=\"center_column\"]/ul/li/div/div[2]/h5/a";
    public static final String PRODUCT_QUANTITY_WANTED = "//*[@id=\"quantity_wanted\"]";
    public static final String SIZE_SELECTOR = "//*[@id=\"group_1\"]";
    public static final String ADD_TO_CART = "//*[@id=\"add_to_cart\"]/button";
    public static final String CONTINUE_SHOPPING = "//*[@id=\"layer_cart\"]/div[1]/div[2]/div[4]/span/span";
    public static final String DELETE_BUTTON = "//a[@title='Delete'][1]";

    /**
     * Add 10 prouducts (different quantities from two different categories).
     * And remove 1 product from basket
     * @throws Exception
     */
    @Test
    public void checkBasket() throws Exception {
        WebDriver driver = getDriver();
        driver.get("http://automationpractice.com/index.php");

        PrestashopPage prestashopPage = new PrestashopPage();

        List<ProductToCart> productsToCart = new ArrayList<>();
        productsToCart.add(new ProductToCart("Blouse", 3, "M"));
        productsToCart.add(new ProductToCart("Printed Dress", 1, "S"));
        productsToCart.add(new ProductToCart("Printed Summer Dress", 4, "S"));

        WebDriverWait wait = new WebDriverWait(driver, 10);

        for (ProductToCart product : productsToCart) {
            // Wait for page to load up and select to be visible
            wait.until(ExpectedConditions.elementToBeClickable(By.xpath(SEARCH)));

            // Search for a product
            WebElement search = driver.findElement(By.xpath(SEARCH));
            search.clear();
            search.sendKeys(product.getName());
            search.submit();

            // Open selected prouct
            String productXpath = FOUND_PRODUCT + "[@title='" + product.getName() + "']";
            wait.until(ExpectedConditions.elementToBeClickable(By.xpath(productXpath)));
            driver.findElement(By.xpath(productXpath)).click();

            // Add product to cart
            wait.until(ExpectedConditions.elementToBeClickable(By.xpath(PRODUCT_QUANTITY_WANTED)));
            WebElement quantityElement = driver.findElement(By.xpath(PRODUCT_QUANTITY_WANTED));
            quantityElement.clear(); // Clear Quantity
            String amount = String.valueOf(product.getAmount());
            quantityElement.sendKeys(amount); // Set Quantity
            WebElement sizeElement = driver.findElement(By.xpath(SIZE_SELECTOR));
            Select selectSizeElement = new Select(sizeElement);
            selectSizeElement.selectByVisibleText(product.getSize());

            // Add to cart
            WebElement addToCartElement = driver.findElement(By.xpath(ADD_TO_CART));
            addToCartElement.click();

            // Continue Shopping
            wait.until(ExpectedConditions.elementToBeClickable(By.xpath(CONTINUE_SHOPPING)));
            WebElement continiueShopping = driver.findElement(By.xpath(CONTINUE_SHOPPING));
            continiueShopping.click();
        }

        // Open Cart
        wait.until(ExpectedConditions.elementToBeClickable(By.xpath(CART_BUTTON)));
        driver.findElement(By.xpath(CART_BUTTON)).click();

        // Delete one product from cart
        WebElement delete = driver.findElement(By.xpath(DELETE_BUTTON));
        delete.click();

        TimeUnit.SECONDS.sleep(5);
    }
}
