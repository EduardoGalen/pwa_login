import React from 'react';
import { Carousel } from 'react-bootstrap'; // Importa el componente Carousel
import './Home.css'; // Asegúrate de tener un archivo CSS para los estilos

const Home = () => {
    return (
        <div className="home-container">
            <div className="container text-center mt-5 custom-background">
                <h1 style={{ fontFamily: 'Cardinal, serif', color: '#ff1493', fontWeight: 'bold', fontSize: '2.5rem' }}>
                    Bienvenidos a Uñas y Pestañas Ross
                </h1>
            </div>

            <div className="container mt-5 p-5" style={{ backgroundColor: '#fff0f5', borderRadius: '20px', boxShadow: '0 8px 16px rgba(0, 0, 0, 0.2)', maxWidth: '800px' }}>
                <h2 className="text-center" style={{ fontFamily: 'Cardinal, serif', color: '#333', letterSpacing: '1.5px' }}>
                    ¡Bienvenidos a Uñas y Pestañas Ross! 🌟
                </h2>

                <p className="lead mt-4" style={{ textAlign: 'justify', fontSize: '1.1em', lineHeight: '1.8', color: '#555' }}>
                    En <strong>Uñas y Pestañas Ross</strong>, nos especializamos en ofrecerte lo mejor en <strong>belleza femenina</strong> con productos y servicios de alta calidad. 💅✨ Nos enorgullece ser un referente en <strong>estilo, elegancia y creatividad</strong> para quienes buscan destacar y cuidar su imagen.
                </p>

                <p className="lead mt-3" style={{ textAlign: 'justify', fontSize: '1.1em', lineHeight: '1.8', color: '#555' }}>
                    Con una mentalidad de mejora continua, estamos comprometidos a <strong>expandir nuestro alcance</strong> y potenciar nuestra <strong>presencia en redes sociales</strong> para brindarte una experiencia enriquecedora. 🎨💖
                </p>

                <p className="lead mt-3" style={{ textAlign: 'justify', fontSize: '1.1em', lineHeight: '1.8', color: '#555' }}>
                    ¡Gracias por ser parte de nuestra comunidad y acompañarnos en este viaje de belleza y transformación! 💫 <strong>¡No olvides seguirnos</strong> para enterarte de nuestras <strong>novedades y promociones exclusivas</strong>!
                </p>

                {/* Botón de llamada a la acción */}
                <div className="text-center mt-4">
                    <a href="https://www.facebook.com/profile.php?id=61563486098673" target="_blank" rel="noopener noreferrer" className="btn btn-primary" style={{ backgroundColor: '#ff69b4', border: 'none', padding: '10px 20px', fontSize: '1.1rem' }}>
                        Explora más
                    </a>
                </div>
            </div>

            {/* Sección de carrusel de imágenes */}
            <div className="container text-center mt-5">
                <Carousel>
                    <Carousel.Item>
                        <img
                            className="d-block w-100"
                            src="/icons/Uña4.jpg"
                            alt="Manicure"
                            style={{ height: '400px', objectFit: 'cover' }}
                        />
                        <Carousel.Caption>
                            <h3>Manicure</h3>
                        </Carousel.Caption>
                    </Carousel.Item>
                    <Carousel.Item>
                        <img
                            className="d-block w-100"
                            src="/icons/Uña5.jpg"
                            alt="Pedicure"
                            style={{ height: '400px', objectFit: 'cover' }}
                        />
                        <Carousel.Caption>
                            <h3>Pedicure</h3>
                        </Carousel.Caption>
                    </Carousel.Item>
                    <Carousel.Item>
                        <img
                            className="d-block w-100"
                            src="/icons/Uña6.jpg"
                            alt="Extensiones de Pestañas"
                            style={{ height: '400px', objectFit: 'cover' }}
                        />
                        <Carousel.Caption>
                            <h3>Extensiones de Pestañas</h3>
                        </Carousel.Caption>
                    </Carousel.Item>
                </Carousel>
            </div>
        </div>
    );
};

export default Home;
