import React from 'react'
import './Footer.css'
import { Link } from 'react-router-dom'

function Footer() {
  return (
    <div>

<footer class="footer" id='foooter'>
    <div class="row">
        <div class="col-sm-6 col-md-4 footer-navigation">
            <h3><a href="#">DEE<span>YEF</span> GENERAL TRADING LLC</a></h3>
            <p class="links"><Link to="/Home" style={{textDecoration:"none",color:"whitesmoke"}}>Home</Link><strong> · </strong>  <Link to="/Aboutus" style={{textDecoration:"none",color:"whitesmoke"}}>About</Link><strong> · </strong><Link to="/Services" style={{textDecoration:"none",color:"whitesmoke"}}>services</Link><strong> · </strong> <Link to="/Gallary"  style={{textDecoration:"none",color:"whitesmoke"}}>gallary</Link><strong> · </strong> <Link to="/Footer" style={{textDecoration:"none",color:"whitesmoke"}}>Contact</Link></p>
            <p class="company-name"></p>
        </div>
        <div class="col-sm-6 col-md-4 footer-contacts">
            <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                <p><span class="new-line-span"> ABUDHABI</span>UAE</p>
            </div>
            <div> <a href="tel: +971 58 592 5686"><i class="fa fa-phone footer-contacts-icon"></i>
             <p class="footer-center-info email text-left"> +971 58 592 5686</p></a>
            </div>
            <div> <a href="tel:  +971 58 985 9969"><i class="fa fa-phone footer-contacts-icon"></i>
             <p class="footer-center-info email text-left"> +971 58 985 9969</p></a>
            </div>
            <div><a href="mailto:info@deeyef.com"><i class="fa fa-envelope footer-contacts-icon"></i>
                <p> info@deeyef.com</p></a>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6 col-md-4 footer-about ">
            <h4>About the company</h4>
            <p>deeceeyef com is one of the leading company.</p>
            <div class="social-links social-icons"><a href="www.facebook.com"><i class="fa fa-facebook"></i></a><a href="www.twitter.com"><i class="fa fa-twitter"></i></a><a href="https://wa.me/+971589859969"><i class="fa fa-whatsapp"></i></a><a href="www.instagram.com"><i class="fa fa-instagram"></i></a></div>
        </div>
    </div>
</footer>

    </div>
  )
}

export default Footer