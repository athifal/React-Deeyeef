import React from 'react'
import Aboutlite from './Aboutlite';
import Banner from './Banner';
import Chooseus from './Chooseus';
import Footer from './Footer';
import Gallarylite from './Gallarylite';
import Logo from './Logo';
import Serviceslite from './Serviceslite';
import Testimonials from './Testimonials';


function Home() {
  return (
    <div><Banner></Banner>
    <Aboutlite></Aboutlite>
    <Chooseus></Chooseus>
    <Serviceslite></Serviceslite>
    <Gallarylite></Gallarylite>
     
   <Testimonials></Testimonials>
   
   
   <Logo></Logo>
  
    </div>
  )
}

export default Home