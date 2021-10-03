
<!-- THIS IS THE GENERAL FOOTER PAGE -->
<script>
    /**
     * @desc For adding product slug
     * @page On the ecommerce-addedit-product.php
     * @return null
     * @param null
     */
    const addSlug = () => {
        var productName = document.getElementById('p_name').value;
        var productSlug = productName.replaceAll(" ", "-");

        document.getElementById('p_slug').value = productSlug;
    } 
</script>