
toastr.options = {
    "closeButton": true,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "10000",
    "extendedTimeOut": "2000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }

const addToCart = (e) => {
    var id = e.dataset.id;
    var user_id = e.dataset.user;

    fetch(`inc/php/actions.php?addToCart=${id}&userId=${user_id}`).then(e => e).then(e => e.text()).then(e => {   
        toastr.success(e);
    }).catch(e => {
        toastr.danger("Error adding to cart");
    })
}

const detailCart = (e) => {
    var id = e.dataset.id;
    var user_id = e.dataset.user;

    fetch(`inc/php/actions.php?detailCart=${id}&userId=${user_id}`).then(e => e).then(e => e.text()).then(e => {   
        toastr.success(e);
    }).catch(e => {
        toastr.danger("Error adding to cart");
    })
}

const mainCart = (e) => {
    var id = e.dataset.id;
    var user_id = e.dataset.user;

    var qty = document.getElementById('qty').value;

    fetch(`inc/php/actions.php?mainCart=${id}&userId=${user_id}&qty=${qty}`).then(e => e).then(e => e.text()).then(e => {   
        toastr.success(e);
    }).catch(e => {
        toastr.danger("Error adding to cart");
    })
}

const removeCart = (e) => {
    var id = e.dataset.id;
    e.parentElement.parentElement.remove();

    fetch(`inc/php/actions.php?removeCart=${id}`).then(e => e).then(e => e.text()).then(e => {   
        toastr.success(e);
    }).catch(e => {
        toastr.danger("Error adding to cart");
    })
}

const placeOrder = (e) => {
    var productId = e.dataset.pId;
    var userId = e.dataset.uId;
    var price = e.dataset.price;

    console.log(productId, userId, price)
}



//Flutterwaves

const payWithRave = (e) => {
    const API_publicKey = "FLWPUBK_TEST-3e1a371f3d4cf1fbe79c81aa128a13ea-X";

    let price = e.dataset.amount;
    var x = getpaidSetup({
        PBFPubKey: API_publicKey,
        customer_email: "user@test.com",
        amount: price,
        customer_phone: "234099940409",
        currency: "NGN",
        //country: "USA",
        txref: "rave-123456",
        meta: [{
            metaname: "flightID",
            metavalue: "AP4321"
        }],
        onclose: function() {},
        callback: function(response) {
            var txref = response.data.txRef; // collect txRef returned and pass to a server page to complete status check.
            console.log("This is the response returned after a charge", response);
            if (
                response.data.chargeResponseCode == "00"
            ) {
                window.location = 'my-account'
            } else {
                console.log('failed');
            }

            x.close(); // use this to close the modal immediately after payment.
        }
    });
}