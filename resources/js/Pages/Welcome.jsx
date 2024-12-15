import Footer from '@/Components/Footer';
import { Head, Link } from '@inertiajs/react';

// Importa los componentes específicos
import GuestWelcome from './GuestWelcome';
import AuthenticatedWelcome from "./Auth/AuthenticatedWelcome";


export default function Welcome({ auth }) {
    return (
        <>
            <Head title="Bienvenidx" />

            {/* Renderiza diferentes componentes según el estado de autenticación */}
            {auth.user ? (
                <AuthenticatedWelcome auth={auth} />
            ) : (
                <GuestWelcome />
            )}

            <Footer />
        </>
    );
}
