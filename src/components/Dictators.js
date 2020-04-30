import React, { Component } from 'react';
import axios from 'axios';

import DictatorQuote from './DictatorQuote'
//import Card from './DictatorCard';

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
        .get("http://localhost:8000/index")
        .then((response) => {
        const listQuote =[];
        while(listQuote){
            const random = response.data[Math.floor(Math.random()*40)];
            if(random !== undefined){
                listQuote.push(random);
            }
        }
        }) 
        
      };


    render(){
        return(

             <div>
            <section className="backgroudColor">
                <div className="container-photo" 
                    listQuote={this.state.random.map((quote) => quote.citation)}>
                    <DictatorQuote onClick={this.getDictator}/>
                    
                   {/*  <Card img={this.state.dictators[0].images}/> */}

                </div>
            </section>
            </div> 
        )
    }

}

export default Dictators
