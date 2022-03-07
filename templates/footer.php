<?php
session_start();
?>

<div class="modal fade" id="modal-cart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header text-white" style="background-color: #282626;">
                  <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td><img src="img/product/1.jpg" alt=""></td>
                        <td><a href="#">Washer</a></td>
                        <td>$499.99</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td><img src="img/product/2.jpg" alt=""></td>
                        <td><a href="#">Toaster</a></td>
                        <td>$289.89</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td><img src="img/product/3.jpg" alt=""></td>
                        <td><a href="#">Mixer</a></td>
                        <td>$150.90</td>
                        <td>1</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-6">
          <h4>Information</h4>
          <ul class="list-unstyled">
            <li><a href="index.php?page=index">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Payment and delivery</a></li>
            <li><a href="#">Contacts</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-6">
          <h4>Working Time</h4>
          <ul class="list-unstyled">
            <li>st Pushkina, d Kolotushkina</li>
            <li>Mon - Fri: 8am - 5pm</li>
          </ul>
        </div>
        <div class="col-md-3 col-6">
          <h4>Contacts</h4>
          <ul class="list-unstyled">
            <li><a href="tel:89527735225">+7(934) 123-58-55</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-6">
          <h4>Messangers</h4>
          <div class="footer-icons">
            <a href="#"><i class="fab fa-vk"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
          </div>
        </div>
      </div>
    </div>
</footer>

<script src="js/bootstrap.js"></script>
</body>
</html>