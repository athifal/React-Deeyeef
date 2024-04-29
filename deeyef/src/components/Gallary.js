import React from 'react'
import './Gallary.css'
import axios from 'axios';


const baseURL ="http://localhost/site/admin/getgallary.php"

function Gallary() {



    const [post, setPost] = React.useState(null);

    React.useEffect(() => {
      axios.get(baseURL).then((response) => {
        setPost(response.data);
      });
    }, []);
    if (!post) return null;
 

  return (
    <div>
  <div class="olaaa"></div>
        
        <div class="aboutus">
                        <h2 class="aboutus-title olaaa">our gallary</h2>
                        </div>
        

<div class="container-fluid">
    <div class="row">
    {
        post.map((obj) => 

        <div class="col-md-4">
            <div class="content mb-5"> 
                    <div class="content-overlay"></div> <img class="content-image" src={"http://localhost/site/admin/gallaryimages/"+ obj.gallaryimage}/>
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">{obj.gallaryhead}</h3>
                       
                    </div>
                 </div>
        </div>
        )
    }
                
        
    </div>
</div>


<svg viewBox="0 0 100 100" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" height="64" width="100%" class="d-block pipo">
    <path d="M 100 100 V 0 L 0 100" /> </svg>
    
    </div>
  )
}

export default Gallary