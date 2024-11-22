import React from 'react';
import './Location.css'; // Importa el archivo CSS

const Location = () => {
    return (
        <div>
            <div className="container text-center mt-5 p-5 ubicacion-container">
                <h1 className="ubicacion-title">
                    Encuéntranos aquí
                </h1>
            </div>

            {/* Sección de Mapa y Dirección */}
            <div className="container mt-5 p-4 ubicacion-details">
                <div className="row">
                    {/* Mapa interactivo */}
                    <div className="col-md-6 mb-4">
                        <div className="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.8605548269284!2d-100.7269920260975!3d20.01436642184762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cd61a5d75b593%3A0xba1664e15d7595eb!2sAcueducto%20262%2C%20San%20Isidro%2C%2038670%20Ac%C3%A1mbaro%2C%20Gto.!5e0!3m2!1ses-419!2smx!4v1730142356663!5m2!1ses-419!2smx"
                                width="100%"
                                height="400"
                                style={{ border: 0, borderRadius: '15px' }}
                                allowFullScreen=""
                                loading="lazy"
                            ></iframe>
                        </div>
                    </div>

                    {/* Detalles de contacto */}
                    <div className="col-md-6 text-center">
                        <h4 className="ubicacion-subtitle">Dirección:</h4>
                        <p className="ubicacion-text">Av. Acueducto #262, Acámbaro, México, 38600</p>

                        <h4 className="ubicacion-subtitle">Horario de Atención:</h4>
                        <p className="ubicacion-text">Lunes a Sábado: 10:00 AM - 8:00 PM</p>
                        <p className="ubicacion-text">Domingo: Cerrado</p>

                        <h4 className="ubicacion-subtitle">Contáctanos:</h4>
                        <p className="ubicacion-text"><strong>Teléfono:</strong> <a href="tel:+5214171022332" className="ubicacion-link">+52 417 177 6775</a></p>
                        <p className="ubicacion-text"><strong>Email:</strong> <a href="mailto:contacto@unasypestanasross.com" className="ubicacion-link">rossbrownde3@gmail.com</a></p>

                        {/* Botón de llamada a la acción */}
                        <a href="https://www.facebook.com/profile.php?id=61563486098673" className="btn btn-primary mt-3 ubicacion-button">
                            Síguenos en Facebook
                        </a>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Location;
