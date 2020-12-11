package com.lazerycode.selenium.page_objects;

import com.lazerycode.selenium.DriverBase;
import com.lazerycode.selenium.util.Query;
import org.openqa.selenium.By;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.ui.Select;

import static com.lazerycode.selenium.util.AssignDriver.initQueryObjects;

public class PrestashopPage {

    private final Query searchBar =
            new Query().defaultLocator(By.xpath("//*[@id=\"search_widget\"]/form/input[2]"));

    private final Query product =
            new Query().defaultLocator(By.xpath("/html/body/main/section/div/div/section/section/div[3]/div/div[1]/div/article/div/div[1]/h2/a"));

    private final Query selectSize =
            new Query().defaultLocator(By.xpath("//*[@id=\"group_1\"]"));

    public PrestashopPage() throws Exception {
        initQueryObjects(this, DriverBase.getDriver());
    }

    public PrestashopPage enterSearchBar(String searchTerm) {
        searchBar.findWebElement().clear();
        searchBar.findWebElement().sendKeys(searchTerm);

        return this;
    }

    public PrestashopPage firstproduct() {
        product.findWebElement().click();

        return this;
    }

    public PrestashopPage selectSize(String size) {
        WebElement element = selectSize.findWebElement();
        Select select = new Select(element);
        select.selectByVisibleText(size);

        return this;
    }
}
