const createFooter = () => {
 let footer = document.querySelector('footer');

 footer.innerHTML = `
 <div class="footer-content">
   <img src="img/logo1.png" class="logo" alt="">
   <div class="footer-ul-container">
    <ul class="category">
     <li class="category-title">Men</li>
     <li><a href="m3.html" class="footer-link">T-shirt</a></li>
     <li><a href="m2.html" class="footer-link">Shirt</a></li>
     <li><a href="m1.html" class="footer-link">Sweater</a></li>
     <li><a href="m4.html" class="footer-link">Jacket</a></li>
     <li><a href="m8.html" class="footer-link">Hoodie</a></li>
     <li><a href="m6.html" class="footer-link">Blazer</a></li>
     <li><a href="m5.html" class="footer-link">Shorts</a></li>
     <li><a href="m7.html" class="footer-link">Jeans</a></li>

    </ul>
    <ul class="category">
     <li class="category-title">Women</li>
     <li><a href="w4.html" class="footer-link">Top</a></li>
     <li><a href="w2.html" class="footer-link">Blouse</a></li>
     <li><a href="w8.html" class="footer-link">Sweater</a></li>
     <li><a href="w5.html" class="footer-link">Hoodie</a></li>
     <li><a href="w3.html" class="footer-link">Shorts</a></li>
     <li><a href="w6.html" class="footer-link">Skirt</a></li>
     <li><a href="w7.html" class="footer-link">Jeans</a></li>
     <li><a href="w1.html" class="footer-link">Dress</a></li>

    </ul>
    <ul class="category">
     <li class="category-title">Accessories</li>
     <li><a href="acc5.html" class="footer-link">Cap</a></li>
     <li><a href="acc2.html" class="footer-link">Glasses</a></li>
     <li><a href="acc7.html" class="footer-link">Clip</a></li>
     <li><a href="acc8.html" class="footer-link">Belt</a></li>
     <li><a href="acc6.html" class="footer-link">Gloves</a></li>
     <li><a href="acc3.html" class="footer-link">Bag</a></li>
     <li><a href="acc4.html" class="footer-link">Jewelry</a></li>
     <li><a href="acc1.html" class="footer-link">Shoes</a></li>

    </ul>
   </div>
  </div>
  <p class="footer-title">About Us</p>
  <p class="info">Hello, we are Zi Qi and Hao Jin, the founders of QI & JIN Fashion Store. Our 
  fascination with the idea of exploring fashion and style just began a little over a year ago. We 
  are both qualified fashion stylists who fully believe in the power of high quality products and 
  admirable goals. To provide you the greatest look possible anywhere, we constantly update the 
  latest fashion.</p>
  <p class="info">Address - 3, Jalan Desa, Taman Connaught, 56000 Cheras, Kuala Lumpur, Malaysia</p>
  <p class="info">Support Email - qi&jin@clothing.com</p>
  <p class="info">Contact Number - 020-800-2019</p>
  <div class="footer-social-container">
   <div>
    <a href="#" class="social-link">Terms & Conditions</a>
    <a href="#" class="social-link">Privacy & Cookie Policy</a>
   </div>
   <div>
    <a href="#" class="social-link">Facebook</a>
    <a href="#" class="social-link">Instagram</a>
    <a href="#" class="social-link">Twitter</a>
   </div>
  </div>
  <p class="footer-credit">QI & JIN, Best Fashion Online Store</p>
 `;
}

createFooter();