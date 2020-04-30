import React, { useState, useEffect } from 'react';
import axios from 'axios';


const Array = () => {
    //const [array, setArray] = useState([]);

    useEffect(() => {
        // Met à jour le titre du document via l’API du navigateur
        axios
        .get('http://localhost:8000/index')
        .then(response => console.log(response))
    }, []);

    return(
        <div>
            {array ? array.map(item => 
                <ul>
                    <li>{item}</li>
                </ul>
            ) : 'No result'}
        </div>
    )
}

export default Array;