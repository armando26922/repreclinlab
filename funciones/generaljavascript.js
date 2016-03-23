//combo box//////////////////////////////////////////////////////////////////////////////


  (function( $ ) {
    $.widget( "custom.combobox", {
      _create: function() {
        this.wrapper = $( "<span>" )
          .addClass( "custom-combobox" )
          .insertAfter( this.element );
 
        this.element.hide();
        this._createAutocomplete();
        this._createShowAllButton();
      },
 
      _createAutocomplete: function() {
        var selected = this.element.children( ":selected" ),
          value = selected.val() ? selected.text() : "";
 
        this.input = $( "<input>" )
          .appendTo( this.wrapper )
          .val( value )
          .attr( "title", "" )
          .addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
          .autocomplete({
            delay: 0,
            minLength: 0,
            source: $.proxy( this, "_source" )
          })
          .tooltip({
            tooltipClass: "ui-state-highlight"
          });
 
        this._on( this.input, {
          autocompleteselect: function( event, ui ) {
            ui.item.option.selected = true;
            this._trigger( "select", event, {
              item: ui.item.option
            });
          },
 
          autocompletechange: "_removeIfInvalid"
        });
      },
 
      _createShowAllButton: function() {
        var input = this.input,
          wasOpen = false;
 
        $( "<a>" )
          .attr( "tabIndex", -1 )
          .attr( "title", "Mostrar todos los elementos" )
          .tooltip()
          .appendTo( this.wrapper )
          .button({
            icons: {
              primary: "ui-icon-triangle-1-s"
            },
            text: false
          })
          .removeClass( "ui-corner-all" )
          .addClass( "custom-combobox-toggle ui-corner-right" )
          .mousedown(function() {
            wasOpen = input.autocomplete( "widget" ).is( ":visible" );
          })
          .click(function() {
            input.focus();
 
            // Close if already visible
            if ( wasOpen ) {
              return;
            }
 
            // Pass empty string as value to search for, displaying all results
            input.autocomplete( "search", "" );
          });
      },
 
      _source: function( request, response ) {
        var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
        response( this.element.children( "option" ).map(function() {
          var text = $( this ).text();
          if ( this.value && ( !request.term || matcher.test(text) ) )
            return {
              label: text,
              value: text,
              option: this
            };
        }) );
      },
 
      _removeIfInvalid: function( event, ui ) {
 
        // Selected an item, nothing to do
        if ( ui.item ) {
          return;
        }
 
        // Search for a match (case-insensitive)
        var value = this.input.val(),
          valueLowerCase = value.toLowerCase(),
          valid = false;
        this.element.children( "option" ).each(function() {
          if ( $( this ).text().toLowerCase() === valueLowerCase ) {
            this.selected = valid = true;
            return false;
          }
        });
 
        // Found a match, nothing to do
        if ( valid ) {
          return;
        }
 
        // Remove invalid value
        this.input
          .val( "" )
          .attr( "title", value + " no se encontro en el listado" )
          .tooltip( "open" );
        this.element.val( "" );
        this._delay(function() {
          this.input.tooltip( "close" ).attr( "title", "" );
        }, 2500 );
        this.input.autocomplete( "instance" ).term = "";
      },
 
      _destroy: function() {
        this.wrapper.remove();
        this.element.show();
      }
    });
  })( jQuery );

//autocomplete de la barra princial/////////////////////////////////////////////////////////////////////////////////////
$.widget( "custom.catcomplete", $.ui.autocomplete, {
    _create: function() {
      this._super();
      this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
    },
    _renderMenu: function( ul, items ) {
      var that = this,
        currentCategory = "";
      $.each( items, function( index, item ) {
        var li;
        if ( item.category != currentCategory ) {
          ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
          currentCategory = item.category;
        }
        li = that._renderItemData( ul, item );
        if ( item.category ) {
          li.attr( "aria-label", item.category + " : " + item.label );
        }
      });
    }
  });


$(document).ready(function(){


 $("#formulario_busqueda").submit(function(event) {

      event.preventDefault();
      var selecion=$('#busqueda_tabla').val().toUpperCase();
      var encontrado=false;


      if(selecion=="ESCRITORIO"){
      encontrado=true;
       //  alert('sii');
       window.location.href='index.php';
      }

      if(selecion=="CONTROL DE LLAMADAS"){
      encontrado=true;
       //  alert('sii');
       window.location.href='index.php';
      }

      if(selecion=="INVENTARIO"){
      encontrado=true;
       //  alert('sii');
       window.location.href='crud_equipo.php';
      }

      if(selecion=="EQUIPOS"){
      encontrado=true;
       //  alert('sii');
       window.location.href='crud_equipo.php';
      }
      if(selecion=="REPUESTOS"){
              encontrado=true;


       window.location.href='crud_repuesto.php';
      }
      if(selecion=="PERIFERICOS"){
      encontrado=true;

       window.location.href='crud_periferico.php';
      }
      if(selecion=="LINEAS"){
      encontrado=true;

       window.location.href='crud_linea.php';
      }
      if(selecion=="MARCAS"){

      encontrado=true;
       window.location.href='crud_marca.php';
      }
      if(selecion=="CLIENTES"){

      encontrado=true;
       window.location.href='crud_cliente.php';
      }
      if(selecion=="EMPLEADOS"){

      encontrado=true;
       window.location.href='crud_empleado.php';
      }
      if(selecion=="CARGOS"){

      encontrado=true;
       window.location.href='crud_cargo.php';
      }
      if(selecion=="EMPLEADOS POR CARGOS"){

      encontrado=true;
       window.location.href='crud_empleado_cargo.php';
      }
      if(selecion=="REPORTES GENERAL"){

      encontrado=true;
       window.location.href='reportes_generales.php';
      }
      if(selecion=="REPORTES GRAFICOS"){

      encontrado=true;
       window.location.href='reportes_graficos.php';
      }

      if(selecion=="USUARIOS"){

      encontrado=true;
       window.location.href='crud_usuario.php';
      }
      if(selecion=="ACCIONES Y ROLES"){

      encontrado=true;
       window.location.href='crud_accion_rol.php';
      }
      if(selecion=="SESSIONES"){

      encontrado=true;
       window.location.href='crud_session.php';
      }

       if(selecion=="PERFIL"){

      encontrado=true;
       window.location.href='perfil.php';
      }
      
      if(encontrado==false){

        alert('el nombre introducido es invalido');
        $("#busqueda_tabla").val("");
      }
        
      /* Act on the event */
      
    });


   var data = [
      { label: "Escritorio", category: "Escritorio" },
      { label: "Inventario", category: "Inventario" },
      { label: "Control de Llamadas", category: "Control de Llamadas" },
      { label: "Equipos", category: "Servicio" },
      { label: "Repuestos", category: "Servicio" },
      { label: "Perifericos", category: "Servicio" },
      { label: "Lineas", category: "Servicio" },
      { label: "Marcas", category: "Servicio" },
      { label: "Clientes", category: "Administracion" },
      { label: "Empleados", category: "Administracion" },
      { label: "Cargos", category: "Administracion" },
      { label: "Empleados por Cargos", category: "Administracion" },
      { label: "Usuarios", category: "Seguridad" },
      { label: "Acciones y Roles", category: "Seguridad" },
      { label: "Reportes General", category: "Reportes" },
      { label: "Reportes Graficos", category: "Reportes" },
      { label: "Perfil", category: "Perfil Usuario" },
      { label: "Sessiones", category: "Seguridad" }
    ];
 
    $( "#busqueda_tabla" ).catcomplete({
      delay: 0,
      source: data
    });






  


});