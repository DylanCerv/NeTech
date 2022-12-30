import React from 'react'
import Header from './Header'
import Footer from './Footer'

import Head from 'next/head'
export default function Layout({children}) {


  return (
    <>
        <Head>
          <link rel="shortcut icon" href="https://res.cloudinary.com/dnnjctymr/image/upload/v1672339816/projects/NeTech/logo_ga7yda.png" type="image/x-icon" />
          <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
          <title>NeTech</title>
        </Head>  
        <Header />
        <main className='md:px-10 lg:px-20'>
          {children}
        </main>
        <Footer />
    </>
  )
}
