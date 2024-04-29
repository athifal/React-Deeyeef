


import Aboutus from './components/Aboutus';


import Chooseus from './components/Chooseus';

import Footer from './components/Footer';

import Gallary from './components/Gallary';

import Header from './components/Header';

import Pop from './components/Pop';
import Services from './components/Services';

import Home from './components/Home';
import { BrowserRouter as Router , Routes , Route} from 'react-router-dom';



function App() {
  return (
    <div>

<Router>
      <Pop></Pop>
     <Header></Header>
     


     <Routes>
     
     
     <Route path="Home" element={<Home/>}/>
      <Route index element={<Home />} /> 
     
     
      <Route path="Aboutus" element={<Aboutus></Aboutus>}/>

      <Route path="Services" element={<Services></Services>}/>
      <Route path="Gallary" element={<Gallary></Gallary>}/>
     

    
     

     
    
    
    
    

    </Routes>

    <Footer></Footer>
  </Router>
  
  
    </div>
  );
}

export default App;
