package com.lazerycode.selenium.page_objects;

public class ProductToCart {
    private final String name;
    private final int amount;
    private final String size;

    public ProductToCart(String name, int amount, String size) {
        this.name = name;
        this.amount = amount;
        this.size = size;
    }

    public String getName() {
        return name;
    }

    public int getAmount() {
        return amount;
    }

    public String getSize() {
        return size;
    }
}
