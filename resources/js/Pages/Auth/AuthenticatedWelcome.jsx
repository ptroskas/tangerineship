import { Link } from '@inertiajs/react';

export default function AuthenticatedWelcome({ auth }) {
    return (
        <div className="bg-white min-h-screen flex flex-col items-center justify-center">
            <header className="text-center">
                <h1 className="text-3xl font-bold text-gray-800">
                    ¡Hola, {auth.user.name}!
                </h1>
                <p className="text-gray-600 mt-2">
                    Bienvenido/a de nuevo a tu Dashboard.
                </p>
            </header>

            <nav className="mt-6">
                <Link
                    href={route('dashboard')}
                    className="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
                >
                    Ir al Dashboard
                </Link>
            </nav>
        </div>
    );
}
