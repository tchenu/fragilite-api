<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="It's a incredible fragility detector. Be happy mdr">
        <title>MyGES FRAGILE</title>
        <link href="css/app.css" rel="stylesheet">

        @livewireStyles
    </head>
    <body>
        <div class="container mx-auto mt-5">
            <h1 class="text-3xl">Indice national de Fragilité Numériques</h1>
            <p class="text-lg my-4">L'indice de fragilité numérique, révèle les zones d'exclusion numérique<br> sur un territoire donné. Cet outil permet, que vous soyez une commune, un département<br> ou une région de comparer votre indice de fragilité numérique avec les autres territoires.</p>
            <livewire:search />
            <div class="mt-10 flex justify-between">
                <picture>
                    <source srcset="images/1.webp" type="image/webp">
                    <img src="images/1.jpg" alt="La nature est belle, on dirait une pub pour de l'eau." title="La nature est belle, on dirait une pub pour de l'eau.">
                </picture>
                <picture>
                    <source srcset="images/2.webp" type="image/webp">
                    <img src="images/2.jpg" alt="Je sens le fluide de l'eau parcourir mes veines!" title="Je sens le fluide de l'eau parcourir mes veines!">
                </picture>
                <picture>
                    <source srcset="images/3.webp" type="image/webp">
                    <img src="images/3.jpg" alt="L'arbre m'évoque une renaissance perpétuelle <34" title="L'arbre m'évoque une renaissance perpétuelle <34">
                </picture>
            </div>
        </div>

        @livewireScripts
    </body>
</html>
