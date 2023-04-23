$(function () {
    var map_settings = {
        map: 'brazil',
        zoomButtons: false,
        zoomMax: 1,
        regionStyle: {
            initial: {
                'fill-opacity': 0.6,
                stroke: '#000',
                'stroke-width': 100,
                'stroke-opacity': 0.3
            },
            hover: {
                fill: '#000000'
            }
        },
        backgroundColor: '#FFF',
        series: {
            regions: [{
                values: {
                    //Escala: 52170b, 7a1b0c, a51b0b, d11507, ff5232, ff7b5a, ff9e81, ffbfaa, ffdfd4, ffffff
                    // Região Norte
                    ac: '#ffffff',
                    am: '#ffbfaa',
                    ap: '#ffbfaa',
                    pa: '#ffbfaa',
                    ro: '#ffbfaa',
                    rr: '#ffbfaa',
                    to: '#ffbfaa',
                    // Região Nordeste
                    al: '#ffdfd4',
                    ba: '#ffdfd4',
                    ce: '#ffdfd4',
                    ma: '#ffdfd4',
                    pb: '#ffdfd4',
                    pe: '#ffdfd4',
                    pi: '#ffdfd4',
                    rn: '#ffdfd4',
                    se: '#ffdfd4',
                    // Região Centro-Oeste
                    df: '#ff7b5a',
                    go: '#ff7b5a',
                    ms: '#ff9e81',
                    mt: '#ff9e81',
                    // Região Sudeste
                    es: '#d11507',
                    mg: '#d11507',
                    rj: '#7a1b0c',
                    sp: '#a51b0b',
                    // Região Sul
                    pr: '#ff5232',
                    rs: '#ff5232',
                    sc: '#ff7b5a'
                },
                attribute: 'fill'
            }]
        },
        container: $('#brazil-map'),
        onRegionClick: function (event, code) {
            $('#clicked-region span').text(code);
        },
        onRegionOver: function (event, code) {
            $('#hovered-region span').text(code);
        }
    };

    map = new jvm.WorldMap($.extend(true, {}, map_settings));
});