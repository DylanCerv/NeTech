const keyAPI = process.env.NEXT_PUBLIC_API_KEY;




/**
 * Hace un Fecth de la API y guarda los datos en un estado
 * @param {String} Vars Las variables GET para hacer consulta en la API
 */
export const fetchAPI = async (stringVars, set_DATA) => {
    const res = await fetch('https://portafoliodylangowner.000webhostapp.com/NeTech-API/?apiKey='+ keyAPI + stringVars +'&country=us' );
    const data = await res.json();
    set_DATA(data);
    // console.log(data);
};