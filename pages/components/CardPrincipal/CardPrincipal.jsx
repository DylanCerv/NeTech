import React from 'react'
import Image from 'next/image'

export default function CardPrincipal({img, title, description, link}) {
  const noImagen = 'https://i.pinimg.com/736x/3a/ab/e0/3aabe0e9a520b9ad90407a82f85adb42.jpg'

  const text = description ? description.split("…") : description;

  return (
    <div className='flex flex-col gap-1'>
        <a className='mb-2 text-center' href={link} target="_blank" rel="noopener noreferrer">
            <img className='rounded w-full' src={img ? img : noImagen} alt="" />
        </a>
        <a href={link} target="_blank" rel="noopener noreferrer">
            <h1 className='text-4xl text-[#303335] font-bold hover:text-[#4298c0]'>{title}</h1>
        </a>
        <p className='text-lg mt-2 text-[#5f6368]'>{description && text[0]+`...`}</p>
    </div>
  )
}
