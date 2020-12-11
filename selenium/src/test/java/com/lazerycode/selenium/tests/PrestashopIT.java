package com.lazerycode.selenium.tests;

import com.lazerycode.selenium.DriverBase;
import com.lazerycode.selenium.page_objects.PrestashopPage;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;
import org.testng.annotations.Test;

import static com.lazerycode.selenium.DriverBase.getDriver;

public class PrestashopIT extends DriverBase {

    /**
     * Add 10 items (different quantities from two different categories).
     * And remove 1 from basket
     * @throws Exception
     */
    @Test
    public void checkBasket() throws Exception {
        WebDriver driver = getDriver();
        driver.get("https://demo.prestashop.com/");

        PrestashopPage prestashopPage = new PrestashopPage();

        // Wait for page to load up and select to be visible
        WebDriverWait wait = new WebDriverWait(driver, 10);
        wait.until(ExpectedConditions.elementToBeClickable(By.xpath("//*[@id=\"search_widget\"]/form/input[2]")));

        prestashopPage.enterSearchBar("Hummingbird Printed T-Shirt");
        prestashopPage.firstproduct();
        prestashopPage.selectSize("L");

    }

//    @Test
//    public void stackoverflow() throws Exception {
//        WebDriver driver = getDriver();
//        driver.get("https://stackoverflow.com/");
//
//        WebDriverWait wait = new WebDriverWait(driver, 10);
//        wait.until(ExpectedConditions.elementToBeClickable(By.name("q")));
//
//        driver.findElement(By.name("q")).sendKeys("Hello World!");
//        driver.findElement(By.name("q")).submit();
//
//
//    }
}
