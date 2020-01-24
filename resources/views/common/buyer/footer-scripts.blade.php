</body>
<script>
    function myaccount() {
        var url = window.location.href
        localStorage.setItem('url', url)
        window.location.href = "login"
    }

    function logout() {
        var a = alertify.confirm('Are you sure you want to signout ?', function(){ alertify.success('Thank you for visiting our website')
            var data = ""
        var type = "application/json";
        var url = "{{ URL('logout')}}";
        var asyn = "true";
        var method = "POST";

        var respCallback = function(resp) {
            localStorage.removeItem("paymethd")
            localStorage.removeItem("buynow_prod_id")
            localStorage.removeItem("url")
            localStorage.removeItem("product_id")
            window.location.reload()
            localStorage.clear();
        }
        var res = serverRequest(data, method, url, asyn, type, respCallback);
         }).set({title:"Deals Of Market"});
        
        
    }

    // function signin() {
    //     var url = window.location.href
    //     localStorage.setItem('url', url)
    //     window.location.href = "login"
    // }
</script>
    @notify_js
    @notify_render

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="{{ URL::asset('assets/js/product.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-1.9.1.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/server-request.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/owl-carousel-custom.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/top-menu.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/home.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/cart.js')}}"></script>

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

