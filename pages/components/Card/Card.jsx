import React from 'react'
import Styles from "./Card.module.css"

export default function Card({img, link, date, name, title, index}) {

  return (
    <>
      {
        index ?
          <div className={`flex flex-col justify-center items-start`} key={index}>
          <a className='mb-2 text-center' href={link} target="_blank" rel="noopener noreferrer">
            <img className='rounded' src={img ? img : 'https://i.pinimg.com/736x/3a/ab/e0/3aabe0e9a520b9ad90407a82f85adb42.jpg'} alt="" />
          </a>
          <div className={`flex flex-col justify-start`}>
            <p className='text-[11px] uppercase text-[#7e57c2dc] font-bold'>{name}</p>
            <p className={`${Styles.xs} text-[#7e7e7e]`}>{new Date(date).toLocaleDateString('en-US')}</p>
            <a href={link} target="_blank" rel="noopener noreferrer">
              <h1 className={`text-base font-bold text-[#303335] hover:text-[#4298c0]`}>{title}</h1>
            </a>
          </div>
        </div>
        :
        ""
      }
    </>
  )
}
