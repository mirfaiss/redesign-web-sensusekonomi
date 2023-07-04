if($('#vmap').length) {
    $('#vmap').vectorMap(
        {
            map: 'usa_en',
            backgroundColor: '#ffffff',
            borderColor: '#ffffff',
            borderOpacity: 0,
            borderWidth: 1,
            color: '#e9ecef',
            enableZoom: false,
            hoverColor: '#0E1B48',
            hoverOpacity: null,
            normalizeFunction: 'linear',
            scaleColors: ['#b6d6ff', '#005ace'],
            selectedColor: '#0E1B48',
            selectedRegions: null,
            showTooltip: true,
            onLabelShow: function(event, label, code)
            {
            label.text(label.text() + ': ' + Math.floor((Math.random() * 10000) + 1) + ' session');
            }
        });
}