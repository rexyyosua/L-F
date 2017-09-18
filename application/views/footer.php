<footer class="page-footer blue accent-3">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Useful Links</h5>
              <ul class="link-hover">
                <li class="section"><a class="grey-text text-lighten-1" href="index.php">Home</a></li>
                <li><a class="grey-text text-lighten-1" href="#about">Tentang</a></li>
                <li class="section"><a class="grey-text text-lighten-1" href="#helper">Cara Penggunaan</a></li>
                <!--<li><a class="grey-text text-lighten-1" href="#contact">Kontak Kami</a></li>-->
              </ul>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Related Link</h5>
              <ul class="link-hover">
                <li class="section ">
                    <a class="grey-text text-lighten-1" href="#!"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>
                </li>
                <li>
                    <a class="grey-text text-lighten-1" href="#!"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</a>
                </li>
                <li class="section">
                    <a class="grey-text text-lighten-1" href="#!"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Google Plus</a>
                </li>
                <li>
                  <a class="grey-text text-lighten-1" href="#!"><i class="fa fa-linkedin-square" aria-hidden="true"></i> Linkedin</a>
                </li>
              </ul>
            </div>
            <hr>
            <div class="col s7">
              <h5 id="contact" class="white-text scrollspy">Kontak Kami</h5>
              <ul class="link-hover">
                <li class="section">
                    <a class="grey-text text-lighten-1" href="#!"><i class="tiny material-icons">language</i> http://lostandfoundgunadarma.com/</a>
                </li>
                <li>
                    <a class="grey-text text-lighten-1" href="#!"><i class="tiny material-icons">stay_current_portrait</i> +6285-7712-7634</a>
                </li>
                <li class="section">
                    <a class="grey-text text-lighten-1" href="#!"><i class="tiny material-icons">location_on</i> Kampus H Gunadarma Depok</a>
                </li>
              </ul>
            </div>
            <!-- <div class="col s5">
              <div class="card blue-grey lighten-4">
                <div class="card-image waves-effect waves-block waves-light">
                  <img src="{% static 'asset/images/background-ball-wallpaper-hd.jpg' %}" class="activator responsive-img">
                </div>
                <div class="card-content activator">
                   <p>Click the image to reveal more information.</p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">HTML5<i class="material-icons right">close</i></span>
                  <p>HTML5 is the next major revision of the HTML standard superseding HTML 4.01, XHTML 1.0, and XHTML 1.1. HTML5 is a standard for structuring and presenting content on the World Wide Web.</p>
                </div>
                <div class="card-action">
                  <button class="btn waves-effect waves-light blue-grey"><i class="material-icons">share</i></button>
                  <a class="right blue-grey-text" href="http://www.tutorialspoint.com">www.tutorialspoint.com</a>
                </div>
              </div>
            </div> -->
          </div>
        </div>

        <div class="footer-copyright">
          <div class="container">
            Lost 'n Found © 2017 Copyright 
            <a class="grey-text text-lighten-4 right" href="index.php"></a>
          </div>
        </div>
    </footer>


    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <!-- Jquery for Spectrum Color -->
    <script type="text/javascript" src="color-spectrum/spectrum.js"></script>
    <!-- Jquery for Alert Dialog -->
    <script type="text/javascript" src="alert-dialog/jquery.dialog.js"></script>
    <script type="text/javascript" src="alert-dialog/jquery.dialog.min.js"></script>
    <!-- Import jQuery before materialize.js -->
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script>
    $(document).ready(function(){
      $('.dropdown-button').dropdown();
      $('.parallax').parallax();
      $('.scrollspy').scrollSpy();
      $(window).scroll(function(){
        if ($(window).scrollTop() > 50 ){
          $('.nav-scroll').addClass('nav-show');
        } else {
          $('.nav-scroll').removeClass('nav-show');
        }
      });
      $('.scrolltop-toggle').click(function(){
        $('html, body').animate({scrollTop : 0});
          return false;
      });
      $('.slider').slider();
      $('ul.tabs').tabs();
      $('.collapsible').collapsible();
      $('select').material_select();
      $('#textarea1').val();
      $('#textarea1').trigger('autoresize');
      $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
      });
      $("#posting-items").click(function(){
        dialog.alert({
                title: "Laporan Kehilangan Berhasil Disimpan",
                message: "Silahkan cek profile kamu sesering mungkin. Apabila barang anda ditemukan, maka kami akan memberitahu pada profile kamu",
                button: "Print Out",
                animation: "fade",
                callback: function(value){
                                console.log(value);
                }
        });
        return false;
      });
      $('#modal1-items').modal();
      $("#print-claim").click(function(){
        $('#modall-items').modal('close');
        dialog.alert({
                title: "Permintaan Klaim Penemuan Barang Berhasil Dikirim",
                message: "Silahkan cek profile kamu sesering mungkin. Apabila pemilik telah menyetujui, maka kami akan memberitahu di profile kamu ",
                button: "Print Out",
                animation: "fade",
                callback: function(value){
                                console.log(value);
                }
        });
        return false;
      });
      $(".button-collapse").sideNav();
    });
    </script>
</body>
</html>