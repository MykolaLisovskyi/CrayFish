
// Живые раки
const lifeCrayfish = {
    "1001" : {
        name: "Микро (XS), 1 кг",
        description: " 21-30 г, 35-39 шт/кг ",
        price: ["1050"],
        img: "img/lifeExtraSmallCrayfish.jpeg"
    } ,
    "1002" : {
        name: "Маленький (S), 1 кг",
        description: "  31-40 г, 27-29 шт/кг ",
        price: ["1450"],
        img: "img/lifeSmallCrayfish.jpeg"
    } ,
    "1003" : {
        name: "Средний (M), 1 кг",
        description: "  41-51 г, 20-22 шт/кг ",
        price: ["1850"],
        img: "img/lifeMediumCrayfish.jpeg"
    } ,
    "1004" : {
        name: "Большой (L), 1 кг",
        description: "  52-72 г, 15-17 шт/кг",
        price: ["2450"],
        img: "img/lifeLargeCrayfish.jpeg"
    } ,
    "1005" : {
        name: "Элитный (XL), 1 кг",
        description: "  от 73 г, 9-12 шт/кг ",
        price: ["3100"],
        img: "img/lifeExtraLargeCrayfish.jpeg"
    } ,

}


// Вареные раки
const boiledCrayfish = {
    "2001" : {
        name: "Классические",
        description: " Раки по-классике, вареные раки без добавлений ",
        detalInfo : " Самый простой и самый распространенный рецепт приготовления речных раков - раки на укропе. Ничего лишнего, только вкусные раки. ",
        price: [1150,1550,1950,2550,3100],
        size: ["XS","S","M","L","XL"],
        img: "img/boiledClassicCrayfish.jpeg",
    },
    "2002" : {
        name: " Пивные",
        description: " Раки в пиве, вареные раки со светлым пивом ",
        detalInfo : " Еще лет 20 назад пиво с раками считалось деликатесом. Что может быть лучше под пиво, чем варёные раки в пиве? ",
        price: [1200,1600,2000,2600,3150],
        size: ["XS","S","M","L","XL"],
        img: "img/boiledBeerCrayfish.jpeg",
    },
    "2003" : {
        name: "Дамские",
        description: " Раки сырные, вареные раки с сыром дорблю и сливками ",
        detalInfo : " Наш фирменный рецепт от шеф повара с добавлением изысканного деликатесного сыра дорблю и нежнейших сливок. Идеальный вкус светских леди и джентельменов.  ",
        price: [1350,1750,2150,2750,3300],
        size: ["XS","S","M","L","XL"],
        img: "img/boiledLadiesCrayfish.jpeg",
    },
    "2004" : {
        name: "Волжские",
        description: " Раки по-волжски, вареные раки с яблоком и лимоном ",
        detalInfo : " Многие люди не любят раков из-за того, что они пахнут тиной. Раки вареные по этому рецепту, источают приятнейший нежный аромат яблок, лимона и укропа. ",
        price: [1150,1550,1950,2550,3100],
        size: ["XS","S","M","L","XL"],
        img: "img/boiledVolzhskiCrayfish.jpeg",
    },
    "2005" : {
        name: "Кавказские",
        description: " Раки по-кавказски, вареные раки со специями, травами и перцем ",
        detalInfo : " Очень вкусные раки по оригинальному рецепту шеф поваров из Кавказа с добавлением разных специй, трав и перцев. ",
        price: [1150,1550,1950,2550,3100],
        size: ["XS","S","M","L","XL"],
        img: "img/boiledCaucasianCrayfish.jpeg",
    },
    "2006" : {
        name: "Казацкие",
        description: " Раки по-казачьи, вареные раки с яблоками и грушей ",
        detalInfo : " Оригинальный рецепт приготовления раков. Этот рецепт «расширенная» версия известной «классики» с хутора Пухляковского. ",
        price: [1250,1650,2050,2650,3200],
        size: ["XS","S","M","L","XL"],
        img: "img/boiledKozakCrayfish.jpeg",
    },
    "2007" : {
        name: "Луизианские",
        description: " Раки по-луизиански, вареные раки с карри и масалой ",
        detalInfo : " Классический американский рецепт. Раки вареные по этому рецепту, прекрасно гармонируют с картофелем, кукурузой и колбасками. ",
        price: [1200,1600,2000,2600,3150],
        size: ["XS","S","M","L","XL"],
        img: "img/boiledLouisianaCrayfish.jpeg",
    },
    "2008" : {
        name: "Мексиканские",
        description: " Раки по-мексикански, вареные раки с соевым соусом и табаско ",
        detalInfo : " Лучший рецепт от ракоедов индейцев и майа. Обязательно подавайте свежий хлеб, чтобы впитать вкусный соус с пикантной остринкой. ",
        price: [1350,1750,2150,2750,3300],
        size: ["XS","S","M","L","XL"],
        img: "img/boiledMexicanCrayfish.jpeg",
    },
    "2009" : {
        name: "Мюнхенские",
        description: " Раки по-немецки, вареные раки с сухим белым вином ",
        detalInfo : " Используем изысканное белое сухое вино Шардонне. Вкус этих раков с винно-папричным соусом отправит васпрямиком в классический немецкий паб.    ",
        price: [1350,1750,2150,2750,3300],
        size: ["XS","S","M","L","XL"],
        img: "img/boiledMunichCrayfish.jpeg",
    },
    "2010" : {
        name: "Тайские",
        description: " Раки по-тайски, вареные раки с пивом и кисло-сладким соусом ",
        detalInfo : " Знаменитый азиатский рецепт с добавлением не фильтрованного пшеничного пива и кисло-сладкого соуса не оставит равнодушным никого. ",
        price: [1300,1700,2100,2700,3250],
        size: ["XS","S","M","L","XL"],
        img: "img/boiledThaiCrayfish.jpeg",
    },
    "2011" : {
        name: "Томатные",
        description: " Раки помидорные, вареные раки с томатным соусом и помидорами ",
        detalInfo : " Раки, отваренные с помидорами, приобретают легкий томатный вкус и получаются невероятно вкусными, а морковка добавляет каплю сладости. ",
        price: [1200,1600,1200,2600,3150],
        size: ["XS","S","M","L","XL"],
        img: "img/boiledTomatoCrayfish.jpeg",
    }
}


// Жареные раки
const friedCrayfish = {
    "3001" : {
        name: "Сливочные",
        description: " Раки нежные, жареные раки со сливками и чесноком ",
        detalInfo : " Невероятно нежные, насыщенные молочным и чесночным вкусом не оставят ни одного гурмана в покое. Пальчики оближешь! ",
        price: [1400,1800,2200,2800,3350],
        size: ["XS","S","M","L","XL"],
        img: "img/friedCreamyCrayfish.jpeg",
    },
    "3002" : {
        name: "Итальянские",
        description: " Раки по-итальянски, Жареные раки с песто и рикотта ",
        detalInfo : " Совешенно уникальный вкус итальянского соуса песто и сыра рикотта. Вкусив этих раков вы очутитесь в маленькой Италии. ",
        price: [1450,1850,2250,2850,3400],
        size: ["XS","S","M","L","XL"],
        img: "img/friedItalianCrayfish.jpeg",
    },
    "3003" : {
        name: "Медовые",
        description: " Раки медовые, жареные раки с медом и лимоном ",
        detalInfo : " Лёгкий медовый аромат и ели уловимая кислинка во вкусе. Выложите их, ярко-оранжевых и аппетитных, на широкое блюдо с горкой.  ",
        price: [1400,1800,2200,2800,3350],
        size: ["XS","S","M","L","XL"],
        img: "img/friedHoneyCrayfish.jpeg",
    },
    "3004" : {
        name: "Чесночные",
        description: " Раки чесночные, жареные раки с чесноком и вкусом детства ",
        detalInfo : " Раки вареные по этому рецепту, окунут вас в детство благодаря секретному рецепту. Особенно вкусно с хлебушком. ",
        price: [1400,1800,2200,2800,3350],
        size: ["XS","S","M","L","XL"],
        img: "img/friedGarlicCrayfish.jpeg",
    }
}