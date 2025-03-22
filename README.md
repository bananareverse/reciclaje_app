Reciclaje App

Reciclaje App es una aplicación web desarrollada en Laravel para gestionar el reciclaje de residuos, permitiendo a los usuarios registrar, visualizar y administrar información relacionada con el reciclaje.

🚀 Características

Registro y autenticación de usuarios.

Envío de correos electrónicos de bienvenida y alertas de inicio de sesión.

Panel de control para usuarios registrados.

Sistema de roles y permisos.



📧 Configuración de Correo

Asegúrate de configurar correctamente los valores SMTP en el archivo .env:

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=tu_correo@gmail.com
MAIL_PASSWORD=contraseña_de_aplicación
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=tu_correo@gmail.com
MAIL_FROM_NAME="Reciclaje App"

📝 Documentación Adicional

Los usuarios recibirán un correo de bienvenida después del registro.

Se enviará un correo de alerta cada vez que un usuario inicie sesión.

