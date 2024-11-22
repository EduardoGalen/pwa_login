import React, { useState } from 'react';
import './Contact.css'; // Importa el archivo CSS

const Contact = () => {
    const [formData, setFormData] = useState({
        name: '',
        email: '',
        message: ''
    });

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData({
            ...formData,
            [name]: value
        });
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        // Aquí puedes manejar el envío del formulario, por ejemplo, enviarlo a una API
        console.log(formData);
    };

    return (
        <div className="container mt-5">
            {/* Encabezado de la sección de contacto */}
            <div className="text-center mt-5 p-5 contact-header">
                <h1 className="contact-title">
                    Contáctanos
                </h1>
                <p className="contact-subtitle">Estamos aquí para ayudarte. ¡Déjanos tu mensaje!</p>
            </div>

            {/* Formulario de contacto */}
            <div className="row justify-content-center mt-4">
                <div className="col-md-8">
                    <form onSubmit={handleSubmit} className="p-4 contact-form">
                        <div className="form-group">
                            <label htmlFor="name" className="contact-label">
                                <i className="fas fa-user"></i> Nombre
                            </label>
                            <input
                                type="text"
                                className="form-control"
                                id="name"
                                name="name"
                                placeholder="Ingresa tu nombre"
                                required
                                value={formData.name}
                                onChange={handleChange}
                            />
                        </div>

                        <div className="form-group mt-3">
                            <label htmlFor="email" className="contact-label">
                                <i className="fas fa-envelope"></i> Correo Electrónico
                            </label>
                            <input
                                type="email"
                                className="form-control"
                                id="email"
                                name="email"
                                placeholder="Ingresa tu correo"
                                required
                                value={formData.email}
                                onChange={handleChange}
                            />
                        </div>

                        <div className="form-group mt-3">
                            <label htmlFor="message" className="contact-label">
                                <i className="fas fa-comment-dots"></i> Mensaje
                            </label>
                            <textarea
                                className="form-control"
                                id="message"
                                name="message"
                                rows="4"
                                placeholder="Escribe tu mensaje"
                                required
                                value={formData.message}
                                onChange={handleChange}
                            ></textarea>
                        </div>

                        <button type="submit" className="btn btn-primary btn-block mt-4 contact-button">
                            Enviar Mensaje
                        </button>
                    </form>
                </div>
            </div>
        </div>
    );
};

export default Contact;
