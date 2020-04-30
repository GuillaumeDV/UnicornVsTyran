import React, { Component } from 'react';
import axios from 'axios';

import Card from './DictatorCard';

import '../assets/Dictators.css'


class Dictators extends Component{
    state = {
        dictators: [],
   
    }

    getDictator = () => {
        axios
          .get("http://localhost:8000/index")
          .then((res) => {
              console.log(res);
                const listBad = [];
                while (listBad.length < 3) {
                const randomhero = res.data[Math.floor(Math.random() * 17)];
                if (randomhero !== undefined) {
                    listBad.push(randomhero);
              }
            }
        })
      };


    render(){
        return(
            <div>
            <section className="backgroudColor">
                <div className="container-photo">
                    <Card img={this.state.dictators[0]}/>
                </div>
            </section>
            </div>
        )
    }

}

export default Dictators
