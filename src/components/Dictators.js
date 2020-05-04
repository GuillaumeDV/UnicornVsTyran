import React, { Component } from 'react';
import axios from 'axios';
import Card from './DictatorCard';
import Unicorn from '../assets/images/licorne.png';

import '../assets/Dictators.css'

class Dictators extends Component{
    state = {
        dictators: [],
        quotes : []
   
    }

    componentDidMount(){
        this.getDictator();
    }

    getDictator = () => {
        axios
        .get("http://localhost:8000/api/index")
        .then(response =>response.data)
        .then(data =>{
            console.log(data)
            this.setState({ quotes: data[0]})
        })

      };


    render(){
        return(
            <div className="container-photo"> 
                {/* <DictatorQuote quote={this.state.quotes} /> */}                       
                    <Card img={this.state.quotes.lien ? this.state.quotes.lien: Unicorn}/>
                    {/* <Card img={this.state.quotes.lien}/> */}
                    {/* <Card img={this.state.quotes.lien}/>*/ }
                    
                </div>
        )
    }

}

export default Dictators


{/* .then((response) => {
    const listQuote =[];
    while(listQuote){
        const random = response.data[Math.floor(Math.random()*40)];
        if(random !== undefined){
            listQuote.push(random);
        }
    }
    }) 
    
    function DictatorCard(props) {
        //console.log(props);
          return (    

                  <img src={props.img && props.img} alt={props.name} />  
                  <img src={props.img && props.img} />            
              </div>
            </div>
      
          );
        } 
    */}
        