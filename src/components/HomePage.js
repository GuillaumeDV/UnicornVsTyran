import React, { Component } from 'react';
import ButtonPlay from './ButtonPlay'

// import ButtonNextQuote from './components/ButtonNextQuote'
//import DisplayNumQuote from './components/DisplayNumQuote'


import '../assets/HomePage.css';
import { Link } from 'react-router-dom';

class HomePage extends Component{
    render(){   
        return(
            <div>
                <section className="backgroudColor">

                    <ButtonPlay />

                    <Link to="/GamePage">
                        <ButtonPlay /> 
                    </Link>
                    {/* <ButtonNextQuote /> */}
                    {/*<DisplayNumQuote />*/}

                </section>
            </div>
        )

    }
}

export default HomePage