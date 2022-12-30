import React from 'react'

export default function Footer() {
  return (
    <footer className='pt-10'>
      <div className='border-t-2 py-5 px-14 flex flex-row justify-between md:px-24 lg:px-36'>
        <img className='w-14' src="https://res.cloudinary.com/dnnjctymr/image/upload/v1672339816/projects/NeTech/logo_ga7yda.png" alt="" />
        <div className='flex flex-row w-full justify-center items-center gap-4 text-sm font-semibold'>
            <a href="">Linkedin</a>
            <a href="">Portafolio</a>
            <a href="">Github</a>
        </div>
      </div>
    </footer> 
  )
}
