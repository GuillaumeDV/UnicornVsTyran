import React, { Component } from 'react';
import ButtonPlay from './ButtonPlay'
import '../assets/HomePage.css';

class HomePage extends Component{
    render(){   
        return(
            <div>
                <section className="backgroudColor">
                    <ButtonPlay />
                </section>
            </div>
        )

    }
}

export default HomePage