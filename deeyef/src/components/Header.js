import React from 'react'
import './Header.css'
import { Link } from 'react-router-dom'

function Header() {
  return (
    <div>
      


      
  
  <header class="main-header">
    <div class="headd bacc">
      <nav class="navbar navbar-expand-lg main-nav px-0">
        <a class="navbar-brand" href="/mojo">
					      <img src="http://rajeshdas.com/assets/images/logo.svg" alt=""/>
					    </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar icon-bar-1"></span>
                        <span class="icon-bar icon-bar-2"></span>
                        <span class="icon-bar icon-bar-3"></span>
                    </button>
        <div class="collapse navbar-collapse" id="mainMenu">
          <ul class="navbar-nav ml-auto text-uppercase f1">
          <li  class="nav-item" >
          <Link to="/Home" style={{textDecoration:"none"}}>
            
       HOME
      </Link></li>
      <li class="nav-item"> 
      <Link to="/Aboutus" style={{textDecoration:"none"}}>
           
       ABOUT
      </Link></li>
      <li class="nav-item">
      <Link to="/Services" style={{textDecoration:"none"}}>
           
       services
      </Link></li>

      <li class="nav-item">
      <Link to="/Gallary"  style={{textDecoration:"none"}}>
            
       gallary
      </Link>
      </li>
      <li class="nav-item">
      <Link to="/Footer" style={{textDecoration:"none"}}>
            
       contact
     </Link> </li>
          </ul>
        </div>
      </nav>
    </div>
  
  </header>
  <svg viewBox="50 50 10 60" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" height="64" width="100%" class="d-block pipo">
    <path d="M 100 100 V 0 L 0 100" /> </svg>
 
 
  </div>

  )
}

export default Header