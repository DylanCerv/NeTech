import Link from 'next/link';
import {React, useState} from 'react'
import Styles from "./Header.module.css"

export default function Header() {
    const [active, setActive] = useState(false);

    const handleToggle = ()=>{
        active ? setActive(false) : setActive(true);
    }

  return (
    <header className={`${Styles.sombra} bg-white/50 flex flex-row justify-between items-center text-[#3c4043] h-12 py-1 px-4 md:px-14 lg:px-24`}>
        <Link className='hover:bg-[#caeeff6e] text-[#3c4043] py-2 px-4 rounded-full flex flex-row gap-3' href="#">
            <img className='w-6' src="https://res.cloudinary.com/dnnjctymr/image/upload/v1672339816/projects/NeTech/logo_ga7yda.png" alt="" />
            <span className='font-semibold'>NeTech</span>
        </Link>
        <div className={`block cursor-pointer lg:hidden ${active && 'hidden'}`} onClick={handleToggle}>
        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
            <path fill="#3c4043" d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/>
        </svg>
        </div>
        <div className={`hidden cursor-pointer lg:hidden ${active && Styles.activeX}`} onClick={handleToggle}>
            <svg className='' xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <g fill="#3c4043" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                    <path d="M5 5L19 5">
                        <animate fill="freeze" attributeName="d" begin="0.2s" dur="0.4s" values="M5 5L19 5;M5 5L19 19"/>
                    </path>
                    <path d="M5 12H19">
                        <animate fill="freeze" attributeName="d" dur="0.4s" values="M5 12H19;M12 12H12"/>
                        <set attributeName="opacity" begin="0.4s" to="0"/>
                    </path>
                    <path d="M5 19L19 19">
                        <animate fill="freeze" attributeName="d" begin="0.2s" dur="0.4s" values="M5 19L19 19;M5 19L19 5"/>
                    </path>
                </g>
            </svg>
        </div>
        <ul className={`text-[#3c4043] hidden flex-col items-center gap-10 lg:flex lg:flex-row ${active && Styles.activeOptions}`}>
            <li><a className='hover:text-[#4fc3f7] font-semibold' href="?category=general">General</a></li>
            <li><a className='hover:text-[#4fc3f7] font-semibold' href="?category=business">Empresas</a></li>
            <li><a className='hover:text-[#4fc3f7] font-semibold' href="?category=entertainment">Entretenimiento</a></li>
            <li><a className='hover:text-[#4fc3f7] font-semibold' href="?category=health">Salud</a></li>
            <li><a className='hover:text-[#4fc3f7] font-semibold' href="?category=science">Ciencia</a></li>
            <li><a className='hover:text-[#4fc3f7] font-semibold' href="?category=sports">Deportes</a></li>
            <li><a className='hover:text-[#4fc3f7] font-semibold' href="?category=technology">Tecnologia</a></li>
        </ul>
    </header>
  )
}
