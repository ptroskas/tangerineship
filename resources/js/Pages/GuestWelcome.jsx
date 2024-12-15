import { Head, Link } from '@inertiajs/react';

export default function GuestWelcome() {
    return (
        <div className="bg-white min-h-screen flex flex-col items-center">
            {/* Header */}
            <header className="w-full flex items-center justify-between px-4 py-4 shadow-md bg-negro">
                <Link
                    href={route("login")}
                    className="px-4 text-white rounded hover:text-primary"
                >
                       <img src="/images/logo.svg" alt="Logo" className="h-14" />
                </Link>
                <Link
                    href={route('login')}
                    className="px-4 text-white rounded hover:text-primary"
                >
                    INICIAR SESIÓN
                </Link>
            </header>

            {/* Banner */}
            <div className="relative w-full h-64 sm:h-80 md:h-96 lg:h-full">
                <img
                    src="/images/banner.svg"
                    alt="Desliza - Conecta +"
                    className="w-full h-full object-cover"
                />
                <div className="absolute inset-0 flex flex-col items-center justify-center">
                    <h1 className="text-white text-4xl font-bold text-center"></h1>
                    <Link
                        href={route('register')}
                        className="lg:mt-64 mt-36 px-10 py-2 bg-primary text-beige text-xl rounded-full hover:bg-secondary shadow-md"
                    >
                        REGÍSTRATE
                    </Link>
                </div>
            </div>
            <div className="flex w-full flex-wrap justify-center items-center text-beige gap-36 text-xl sm:gap-12 bg-secondary min-h-20">
              <p>Conéctate de verdad</p>
              <p>Más que un perfil, una personalidad</p>
              <p>Descubre lo que realmente importa</p>
              <p>Sin prejuicios</p>
              <p>Cada historia cuenta</p>
              <p>Desliza menos, vive más</p>
              <p>Un espacio para ser tú</p>
            </div>
            {/* Fotografía de la galería */}
            <div className="flex flex-wrap justify-center gap-36 sm:gap-12 my-12">
                <img src="/images/f1.png" alt="Photo 1" className="size-72 object-cover" />
                <img src="/images/f2.png" alt="Photo 2" className="size-72 object-cover" />
                <img src="/images/f3.png" alt="Photo 3" className="size-72 object-cover" />
                <img src="/images/f4.png" alt="Photo 4" className="size-72 object-cover" />
            </div>
        </div>
    );
}
