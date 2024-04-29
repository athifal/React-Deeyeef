import React from 'react'
import './Gallarylite.css'
import { Link } from 'react-router-dom'
import axios from 'axios';


const baseURL ="http://localhost/site/admin/getgallary.php"

    
  
function Gallarylite() {


    const n =3
    const [post, setPost] = React.useState(null);

    React.useEffect(() => {
      axios.get(baseURL).then((response) => {
        setPost(response.data);
      });
    }, []);
    if (!post) return null;




 

  return (
    <div>
        
<div class="aboutus-section olaaa">
        <div class="koopp">
            <div class="row">
                {/* <div class="col-md-3 col-sm-6 col-xs-12"> */}
                    <div class="aboutus">
                        <h2 class="aboutus-title">visit our gallary</h2>
                       
                        
    <div class="koopp">
    {
        post.slice(0, n).map((obj) => 

   
                        <div class="col-md-4">
   
            <div class="content"> 
                    <div class="content-overlay"></div> <img class="content-image" src={"http://localhost/site/admin/gallaryimages/"+ obj.gallaryimage}/>
                   
                 </div>
                </div>
                )
            }
        
        
    </div>
</div><div class="aboutus-more content"><Link to="/Gallary" style={{textDecoration:"none"}}>
            
            view more
           </Link></div>
</div>
                        
                    {/* </div> */}
                </div>
                </div>
                </div>
      
  )
}

export default Gallarylite