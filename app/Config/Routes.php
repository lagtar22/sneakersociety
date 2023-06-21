<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/contacto', 'Home::contacto');
$routes->get('/comercializacion', 'Home::comercializacion');
$routes->get('/quienes_somos', 'Home::quienes');
$routes->get('/terminos_y_usos', 'Home::terminos');
$routes->get('/como_comprar', 'Home::como_comprar');


$routes->group("administrador", ["filter"=>"Autenticacion"], function ($routes){
    // Rutas para usuario
    $routes->get('usuarios/consultar', 'Controlador_User::listadoUsuarios', ['as' => 'usuarios']);
    $routes->post('usuarios/consultar', 'Controlador_User::buscarUsuarios', ['as' => 'buscarUsuarios']);
    $routes->get('usuarios/editar/(:num)', 'Controlador_User::editar/$1');
    $routes->post('usuarios/actualizarD', 'Controlador_User::actualizar', ['as' => 'usuarios_actualizar']);
    $routes->get('usuarios/borrar/(:num)', 'Controlador_User::borrar/$1');
    $routes->get('usuarios/alta/(:num)', 'Controlador_User::alta/$1');
    $routes->get('usuarios/usuariosElimados', 'Controlador_User::usuariosEliminadas', ['as' => 'usuarios_eliminados']);
    // Rutas para Marcas
    $routes->get('marca', 'Marca::listarMarca', ['as' => 'marca']);
    $routes->get('marca/agregarMarca', 'Marca::nuevaMarca', ['as' => 'Marca_añadir']);
    $routes->post('marca/guardarMarca', 'Marca::cargarNuevaMarca', ['as' => 'Marcas_cargar']);
    $routes->get('marca/editarMarca/(:num)', 'Marca::editarMarca/$1');
    $routes->post('marca/actualizarMarca', 'Marca::actualizarMarca', ['as' => 'marca_actualizar']);
    $routes->get('marca/borrarMarca/(:num)', 'Marca::borrarMarca/$1');
    $routes->get('marca/mostrarEliminado', 'Marca::MarcaEliminadas', ['as' => 'marcas_eliminadas']);
    $routes->get('marca/darAltaMarca/(:num)', 'Marca::darAltaMarca/$1'); 
    
    $routes->get('usuarios/datos', 'Controlador_User::datos_admin', ['as' => 'usuarios_datos']);
    $routes->get('usuarios/editar/(:num)', 'Controlador_User::editar/$1');
    $routes->post('usuarios/actualizarDatosAdmin', 'Controlador_User::actualizarAdmin', ['as' => 'usuarios_actualizar_Datos']);

    // Rutas para la categorias
    $routes->get('categorias', 'Categoria::listarCategoria', ['as' => 'categorias']);
    $routes->get('categorias/agregarCategoria', 'Categoria::nuevaCategoria', ['as' => 'categorias_añadir']);
    $routes->post('categorias/guardarCategoria', 'Categoria::cargarNuevaCategoria', ['as' => 'categorias_cargar']);
    $routes->get('categorias/editarCategoria/(:num)', 'Categoria::editarCategoria/$1');
    $routes->post('categorias/actualizarCategoria', 'Categoria::actualizarCategoria', ['as' => 'categorias_actualizar']);
    $routes->get('categorias/borrarCategoria/(:num)', 'Categoria::borrarCategoria/$1');
    $routes->get('categorias/mostrarEliminado', 'Categoria::categoriasEliminadas', ['as' => 'categorias_eliminados']);
    $routes->get('categorias/darAltaCategoria/(:num)', 'Categoria::darAltaCategoria/$1');

    // Rutas para Producto
    $routes->get('productos', 'Producto::listarProductos', ['as' => 'productos']);
    $routes->post('productos', 'Producto::buscarProductos', ['as' => 'buscarProductos']);
    $routes->get('agregarProducto', 'Producto::nuevoProducto', ['as' => 'producto_añadir']);
    $routes->post('guardarProducto', 'Producto::cargarNuevoProducto', ['as' => 'producto_guardar']);
    $routes->get('editarProducto/(:num)', 'Producto::editarProducto/$1');
    $routes->post('actualizarProducto', 'Producto::actualizarProducto', ['as' => 'producto_actualizar']);
    $routes->get('borrarProducto/(:num)', 'Producto::borrarProducto/$1');
    $routes->get('darAltaProducto/(:num)', 'Producto::darAltaProducto/$1');
    $routes->get('productosEliminados', 'Producto::productosEliminadas', ['as' => 'productos_Eliminados']);

    // Ruta para consultas
    $routes->get('listarConsultas', 'Consulta::listarConsultas', ['as' => 'lista_Consultas']);
    $routes->get('consultaVerificada/(:num)', 'Consulta::consultaVerificada/$1');

    // Ruta para Contacto
    $routes->get('listarContacto', 'Contacto::listarConsultas', ['as' => 'lista_Contacto']);
    $routes->get('consultaVerificadaContacto/(:num)', 'Contacto::consultaVerificada/$1');

    // Mostrar Ventas
    $routes->get('ventasCabecera', 'RegistroVentas::ventas_Cabeceras_admin', ['as' => 'ventas_cabecera']);
    $routes->post('buscarVentasPorFecha', 'RegistroVentas::buscarVentasPorFecha', ['as' => 'buscar_ventas']);
    $routes->get('detalles', 'RegistroVentas::mostrarDetalle' );
    $routes->get('descargarFactura/(:num)', 'RegistroVentas::descargarFactura/$1');

    $routes->get('logout', 'Controlador_User::cerrarSesion');
});

$routes->group("cliente", ["filter"=>"Autenticacion_Cliente"], function ($routes){
    $routes->get('logout', 'Controlador_User::cerrarSesion');
    
    // Ruta carrito
    $routes->post('agregarCarrito', 'Carrito::agregarCarrito');
    $routes->get('borrarProducto', 'Carrito::borrarCarrito', ['as' => 'borrarCarrito']);
    $routes->post('borrarProductoUnitario', 'Carrito::borrarProductoUnitario');
    $routes->get('Carrito', 'Carrito::ver_Carrito', ['as' => 'verCarrito']);
    $routes->get('realizarCompra', 'Carrito::comprar', ['as' => 'compra']);

    $routes->get('datosUsuario', 'Controlador_User::datos_User', ['as' => 'datos_cliente']);
    $routes->get('editar/(:num)', 'Controlador_User::editar/$1');
    $routes->post('actualizarDatosCliente', 'Controlador_User::actualizarCliente', ['as' => 'cliente_Actualizar']);

    // cliente ventacabecera
    $routes->get('ventasCabecera', 'RegistroVentas::mostrarCabecera', ['as' => 'ventas_cabecera_cliente']);
    $routes->get('detalles', 'RegistroVentas::mostrarDetalle' );
    $routes->get('descargarFactura/(:num)', 'RegistroVentas::descargarFactura/$1');
});
    // Ruta del catalogo
    $routes->get('listarCatalogo', 'ListaCatalogo::listarProductos', ['as' => 'catalogo']);
    $routes->post('productos_catalogo', 'ListaCatalogo::filtrarProducto', ['as' => 'filtrar']);

    // Inicio de sesion y registro
    $routes->post('guardar', 'Controlador_User::cargarRegistro');
    $routes->get('registro', 'Controlador_User::crearRegistro');
    $routes->get('login', 'Controlador_User::login');
    $routes->post('iniciarSesion', 'Controlador_User::inicioSesion');
    $routes->get('logout', 'Controlador_User::cerrarSesion');

    $routes->post('realizarContacto', 'Contacto::cargarMensaje', ['as' => 'contacto_C']);
    $routes->post('realizarConsulta', 'Consulta::cargarMensaje', ['as' => 'consulta']);
    
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}