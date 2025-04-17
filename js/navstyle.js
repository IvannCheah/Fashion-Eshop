const createNav = () => {
 let nav = document.querySelector('.navbar');

 nav.innerHTML = `
  <div class="menu-bar">
  <img src="img/logo1.png" class="logo" alt="">
  <ul>
   <li><a href="index.html">Home</a></li>
   <li><a href="men.html">Men</a>
   <div class="dropdown-menu">
      <ul>
        <li><a href="men.html">Shirt</a></li>
        <li><a href="men.html">T-shirt</a></li>
        <li><a href="men.html">Shorts</a></li>
        <li><a href="men.html">Jeans</a></li>
    </ul>
    </div>
   </li>
   <li><a href="women.html">Women</a>
    <div class="dropdown-menu">
     <ul>
      <li><a href="women.html">Top</a></li>
      <li><a href="women.html">Blouse</a></li>
      <li><a href="women.html">Skirt</a></li>
      <li><a href="women.html">Dress</a></li>
     </ul>
    </div>
   </li>
   <li><a href="accessories.html">Accessories</a></li>
   <li><a href="contact.html">Contact us</a></li>
  </ul>
 </div>
   <div class="nav">
    <div class="nav-items">
     <div class="search">
      <input type="text" class="search-box"
      placeholder="Frenchy Tie Back Puff Sleeve Crop Top">
      <button class="search-btn">Search</button>
     </div>
     <a href="cart-page.html"><img src="img/cart-logo.png"></a>
     <a href="http://localhost/Project/register.php"><img src="img/account-logo.png"></a>
    </div>
   </div>
  `;
}

createNav();
