$(document).ready(function () {
    //Cerrar Las Alertas Automaticamente
    $('.alert[data-auto-dismiss]').each(function (index, element) {
        const $element = $(element),
            timeout = $element.data('auto-dismiss') || 3000;
        setTimeout(function () {
            $element.alert('close');
        }, timeout);
    });
    //TOOLTIPS
    $('body').tooltip({
        trigger: 'hover',
        selector: '.tooltipsC',
        placement: 'top',
        html: true,
        container: 'body'
    });
    /*Agrega la clase active al padre del menú que se encuentre activo
    para que permanezca expandido y no se colapse al elegir una opción del menú*/
    $('ul.sidebar-menu').find('li.active').parents('li').addClass('active');
});