import { useEffect, useState } from "react";
import Styles from "../styles/Home.module.css";
import CardPrincipal from "./components/CardPrincipal/CardPrincipal";
import Card from "./components/Card/Card";
import Layout from "./components/Layout/Layout";
import Script from "next/script";
// import DATA_ARTICLES from "./api/data.json";


export default function Home() {
  // let variablesCompleta = [];
  // let nombreVariablesGET = [];
  // let valuesVariablesGET = [];

  // const keyAPI = process.env.NEXT_PUBLIC_API_KEY;
  // const Vars_of_API = [
  //   "country",
  //   "category",
  //   "sources",
  //   "q",
  //   "pagesize",
  //   "excludedomains",
  //   "from",
  //   "to",
  //   "language",
  //   "sortby",
  // ];
  // const valuesofVars = {
  //   // Un solo parametro
  //   country: [ // El código ISO 3166-1 de 2 letras del país del que desea obtener titulares.

  //   ],
  //   // Un solo parametro
  //   category: [
  //     "business",
  //     "entertainment",
  //     "general",
  //     "health",
  //     "science",
  //     "sports",
  //     "technology",
  //   ],
  //   // Un solo parametro y No mezclar con contry ni category
  //   sources: [

  //   ],
  //   // Palabra clave de la busqueda
  //   q: [

  //   ],
  //   // Cantidad de resultados a devolver por defecto min=20 y un max=100
  //   pagesize: [

  //   ],
  //   // Ecluir dominios de los resiltados se separan por comas &excludeDomains=bbc.co.uk,techcrunch.com,engadget.com
  //   excludedomains: [

  //   ],
  //   // Fecha de inicio
  //   from: [ // FORMATOS -> 2022-05-16 OR 2022-05-16T01:07:46

  //   ],
  //   // Fecha de fin
  //   to: [ // FORMATOS -> 2022-05-16 OR 2022-05-16T01:07:46

  //   ],
  //   // Lenguajes
  //   language: [

  //   ],
  //   // Orden de los articulos
  //   sortby: [
  //     'relevancy',
  //     'popularity',
  //     'publishedAt'
  //   ],
  // };

  const [DATA_ARTICLES, set_DATA_ARTICLES] = useState(undefined);
  const [categoria, setCategoria] = useState("Tecnologia");


  // /**
  //  * Comprueba que el valor de la variagle GET sea valido para la API
  //  * @param {String} variable El nombre de la variable GET
  //  * @param {String} valor El valor de la variable GET
  //  * @returns (true) Si existe el valor en el array
  //  */
  // const comprobarVariable = (variable, valor) => {
  //   switch (variable) {
  //     case "country":
  //       return valuesofVars.country.includes(valor);
  //       break;

  //     case "category":
  //       return valuesofVars.category.includes(valor);
  //       break;

  //     case "sources":
  //       return valuesofVars.sources.includes(valor);
  //       break;

  //     case "q":
  //       return valuesofVars.q.includes(valor);
  //       break;

  //     case "pagesize":
  //       return valuesofVars.pagesize.includes(valor);
  //       break;

  //     case "excludedomains":
  //       return valuesofVars.excludedomains.includes(valor);
  //       break;

  //     case "from":
  //       return valuesofVars.from.includes(valor);
  //       break;

  //     case "to":
  //       return valuesofVars.to.includes(valor);
  //       break;

  //     case "language":
  //       return valuesofVars.language.includes(valor);
  //       break;

  //     case "sortby":
  //       return valuesofVars.sortby.includes(valor);
  //       break;

  //     default:
  //       console.log("Variable GET no declarada");
  //       break;
  //   }
  // };

  // /**
  //  * Comprueba el nombre de la Categoria y la guarda en un estado para ser usado en el HTML
  //  * @param {String} nameCateogory El valor de la categoria
  //  */
  // const nameCateogory = (nameCateogory) => {
  //   switch (nameCateogory) {
  //     case "business":
  //       setCategoria('Empresas');
  //       break;

  //     case "entertainment":
  //       setCategoria('Entretenimiento');
  //       break;

  //     case "general":
  //       setCategoria('General');
  //       break;

  //     case "health":
  //       setCategoria('Salud');
  //       break;

  //     case "sports":
  //       setCategoria('Deportes');
  //       break;

  //     case "technology":
  //       setCategoria('Tegnologia');
  //       break;

  //     default:
  //       setCategoria("NONE");
  //       break;
  //   }
  // };

  // /**
  //  * Obtiene y comprueba que las variables GET sean correctas y las guarda en arrays
  //  * @param {array} variable => Los nombres de las variables que van a ir en la API
  //  */
  // const getParametro = (Name_Vars_API) => {
  //   variablesCompleta = [];
  //   nombreVariablesGET = [];
  //   valuesVariablesGET = [];

  //   let query = window.location.search.substring(1);
  //   query = query.toLowerCase();
  //   let variables_GET = query.split("&");

  //   for (let i = 0; i < variables_GET.length; i++) {
  //     let partes = variables_GET[i].split("=");

  //     // Comprueba si existe el nombre y el valor de la variable GET
  //     if (Name_Vars_API.includes(partes[0]) &&
  //         comprobarVariable(partes[0], partes[1])) 
  //     {
  //       nameCateogory(partes[1]);

  //       //Guardamos las variables y valores en un array
  //         variablesCompleta.push("&" + variables_GET[i]);
  //       //Guardamos los nombres de las variables en un array
  //         nombreVariablesGET.push(partes[0]);
  //       //Guardamos los valores de las variables en un array
  //         valuesVariablesGET.push(partes[1]);
  //     }
  //   }
  // };

  // /**
  //  * Hace un Fecth de la API y guarda los datos en un estado
  //  * @param {String} Key La clave para usar la API
  //  * @param {String} Vars Las variables GET para hacer consulta en la API
  //  */
  // const fetchAPI = async (Key,  stringVars) => {
  //   const res = await fetch('https://newsapi.org/v2/top-headlines?apiKey='+ Key + stringVars +'&pagesize=50&country=us' );
  //   const data = await res.json();
  //   set_DATA_ARTICLES(data);
  //   // console.log(data);
  // };

  useEffect(() => {
    let variablesCompleta = [];
    let nombreVariablesGET = [];
    let valuesVariablesGET = [];
    const keyAPI = process.env.NEXT_PUBLIC_API_KEY;
    const Vars_of_API = [
      "country",
      "category",
      "sources",
      "q",
      "pagesize",
      "excludedomains",
      "from",
      "to",
      "language",
      "sortby",
    ];
    const valuesofVars = {
      // Un solo parametro
      country: [ // El código ISO 3166-1 de 2 letras del país del que desea obtener titulares.
  
      ],
      // Un solo parametro
      category: [
        "business",
        "entertainment",
        "general",
        "health",
        "science",
        "sports",
        "technology",
      ],
      // Un solo parametro y No mezclar con contry ni category
      sources: [
  
      ],
      // Palabra clave de la busqueda
      q: [
  
      ],
      // Cantidad de resultados a devolver por defecto min=20 y un max=100
      pagesize: [
  
      ],
      // Ecluir dominios de los resiltados se separan por comas &excludeDomains=bbc.co.uk,techcrunch.com,engadget.com
      excludedomains: [
  
      ],
      // Fecha de inicio
      from: [ // FORMATOS -> 2022-05-16 OR 2022-05-16T01:07:46
  
      ],
      // Fecha de fin
      to: [ // FORMATOS -> 2022-05-16 OR 2022-05-16T01:07:46
  
      ],
      // Lenguajes
      language: [
  
      ],
      // Orden de los articulos
      sortby: [
        'relevancy',
        'popularity',
        'publishedAt'
      ],
    };



  /**
   * Comprueba que el valor de la variagle GET sea valido para la API
   * @param {String} variable El nombre de la variable GET
   * @param {String} valor El valor de la variable GET
   * @returns (true) Si existe el valor en el array
   */
  const comprobarVariable = (variable, valor) => {
    switch (variable) {
      case "country":
        return valuesofVars.country.includes(valor);
        break;

      case "category":
        return valuesofVars.category.includes(valor);
        break;

      case "sources":
        return valuesofVars.sources.includes(valor);
        break;

      case "q":
        return valuesofVars.q.includes(valor);
        break;

      case "pagesize":
        return valuesofVars.pagesize.includes(valor);
        break;

      case "excludedomains":
        return valuesofVars.excludedomains.includes(valor);
        break;

      case "from":
        return valuesofVars.from.includes(valor);
        break;

      case "to":
        return valuesofVars.to.includes(valor);
        break;

      case "language":
        return valuesofVars.language.includes(valor);
        break;

      case "sortby":
        return valuesofVars.sortby.includes(valor);
        break;

      default:
        console.log("Variable GET no declarada");
        break;
    }
  };

  /**
   * Comprueba el nombre de la Categoria y la guarda en un estado para ser usado en el HTML
   * @param {String} nameCateogory El valor de la categoria
   */
  const nameCateogory = (nameCateogory) => {
    switch (nameCateogory) {
      case "business":
        setCategoria('Empresas');
        break;

      case "entertainment":
        setCategoria('Entretenimiento');
        break;

      case "general":
        setCategoria('General');
        break;

      case "health":
        setCategoria('Salud');
        break;

      case "sports":
        setCategoria('Deportes');
        break;

      case "technology":
        setCategoria('Tegnologia');
        break;

      default:
        setCategoria("NONE");
        break;
    }
  };

  /**
   * Obtiene y comprueba que las variables GET sean correctas y las guarda en arrays
   * @param {array} variable => Los nombres de las variables que van a ir en la API
   */
  const getParametro = (Name_Vars_API) => {
    variablesCompleta = [];
    nombreVariablesGET = [];
    valuesVariablesGET = [];

    let query = window.location.search.substring(1);
    query = query.toLowerCase();
    let variables_GET = query.split("&");

    for (let i = 0; i < variables_GET.length; i++) {
      let partes = variables_GET[i].split("=");

      // Comprueba si existe el nombre y el valor de la variable GET
      if (Name_Vars_API.includes(partes[0]) &&
          comprobarVariable(partes[0], partes[1])) 
      {
        nameCateogory(partes[1]);

        //Guardamos las variables y valores en un array
          variablesCompleta.push("&" + variables_GET[i]);
        //Guardamos los nombres de las variables en un array
          nombreVariablesGET.push(partes[0]);
        //Guardamos los valores de las variables en un array
          valuesVariablesGET.push(partes[1]);
      }
    }
  };

  /**
   * Hace un Fecth de la API y guarda los datos en un estado
   * @param {String} Key La clave para usar la API
   * @param {String} Vars Las variables GET para hacer consulta en la API
   */
  const fetchAPI = async (Key,  stringVars) => {
    const res = await fetch('https://newsapi.org/v2/top-headlines?apiKey='+ Key + stringVars +'&pagesize=50&country=us' );
    const data = await res.json();
    set_DATA_ARTICLES(data);
    // console.log(data);
  };

    /**
     * Ejecuta todas las funciones y condicionales finales para que se haga la consulta de la API de forma correcta
     */
    const final_Execution_API = ()=>{
      let vars;

      window.location.search && getParametro(Vars_of_API)

      vars = variablesCompleta.join('');
      if (!vars && !vars.includes('category=')) {
        vars = vars + '&category=technology'
      }
      
      fetchAPI(keyAPI, vars);
    }
    final_Execution_API();
  },[]);

  return (
    <Layout>
      <div className={`${Styles.paddinHome} flex flex-col gap-10`}>
        {
          DATA_ARTICLES != undefined ?
           console.log(1, DATA_ARTICLES)
           // <CardPrincipal
          //   key={531}
          //   img={DATA_ARTICLES.articles[0].urlToImage}
          //   title={DATA_ARTICLES.articles[0].title}
          //   description={DATA_ARTICLES.articles[0].content}
          //   link={DATA_ARTICLES.articles[0].url}
          // />
          : 
          "Loading..."
        }
        <div className="border-b-2 flex justify-center">
          <h3 className="font-blod text-lg mb-2">
            NEWS{" "}
            <span className="text-[#7e57c2] font-bold uppercase">
              {categoria}
            </span>
          </h3>
        </div>
        <div className="grid grid-cols-2 items-start gap-5 md:grid-cols-4">
          {
          DATA_ARTICLES != undefined ?
           console.log(2, DATA_ARTICLES)
            // DATA_ARTICLES.articles.map((data, index) => (
            //   <Card
            //     key={index}
            //     img={data.urlToImage}
            //     date={data.publishedAt}
            //     name={data.source.name}
            //     title={data.title}
            //     link={data.url}
            //     index={index}
            //   />
            //   ))
            :
            "Loading..."
            }
        </div>
      </div>
    </Layout>
  );
}