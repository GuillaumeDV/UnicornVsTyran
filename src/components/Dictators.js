import React, { Component } from 'react';
import axios from 'axios';

import DictatorQuote from './DictatorQuote'
import Card from './DictatorCard';

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
        .then(response =>response.data)
        .then(data =>{
            console.log(data)
            this.setState({ quotes: data[0]})
        })

      };


    render(){
        return(
             <div>
                <section className="backgroudColorGame">
                    <div className="container-photo">
                            
                        <DictatorQuote quote={this.state.quotes} />
                        
                         <Card img={this.state.quotes.lien}/>

                    </div>
                </section>
            </div> 
        )
    }

}

export default Dictators


/* .then((response) => {
    const listQuote =[];
    while(listQuote){
        const random = response.data[Math.floor(Math.random()*40)];
        if(random !== undefined){
            listQuote.push(random);
        }
    }
    }) */ 
    