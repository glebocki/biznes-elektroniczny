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


    public static final String CART_BUTTON = "//*[@id=\"_desktop_cart\"]/div/div/a";
    public static final String SEARCH = "//*[@id=\"search_widget\"]/form/input[2]";
    public static final String FOUND_PRODUCT = "//*[@id=\"js-product-list\"]/div[1]/article/div/div[1]/h2/a";
    public static final String PRODUCT_QUANTITY_WANTED = "//*[@id=\"quantity_wanted\"]";
    public static final String SIZE_SELECTOR = "//*[@id=\"group_1\"]";
    public static final String ADD_TO_CART = "//*[@id=\"add-to-cart-or-refresh\"]/div[2]/div/div[2]/button";
    public static final String CONTINUE_SHOPPING = "//*[@id=\"blockcart-modal\"]/div/div/div[2]/div/div[2]/div/div/button";
    public static final String DELETE_BUTTON = "//*[@id=\"main\"]/div/div[1]/div/div[2]/ul/li[1]/div/div[3]/div/div[3]/div/a[1]";

    /**
     * Add 10 prouducts (different quantities from two different categories).
     * And remove 1 product from basket
     * @throws Exception
     */
    @Test
    public void checkBasket() throws Exception {
        WebDriver driver = getDriver();
        driver.get("http://localhost/prestashop/index.php");

        PrestashopPage prestashopPage = new PrestashopPage();

        List<ProductToCart> productsToCart = new ArrayList<>();
        productsToCart.add(new ProductToCart("Botki", 3, "37"));
        productsToCart.add(new ProductToCart("Kozaki", 3, "38"));
        productsToCart.add(new ProductToCart("Botki", 4, "40"));

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
            String productXpath = FOUND_PRODUCT;
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
	TimeUnit.SECONDS.sleep(3);
        }

        // Open Cart
        wait.until(ExpectedConditions.elementToBeClickable(By.xpath(CART_BUTTON)));
        driver.findElement(By.xpath(CART_BUTTON)).click();

        // Delete one product from cart
        WebElement delete = driver.findElement(By.xpath(DELETE_BUTTON));
        delete.click();

        TimeUnit.SECONDS.sleep(30);
    }
}

