<?php

namespace App\Controllers;

class QuizController extends BaseController
{
    private function cargarVista($preguntas, $titulo)
    {
        return view('quiz', [
            'preguntas' => $preguntas,
            'titulo'    => $titulo
        ]);
    }

    public function historia()
    {
        $preguntas = [
            [
                'pregunta' => '¿En qué año comenzó la Segunda Guerra Mundial?',
                'opciones' => ['1939', '1914', '1945', '1950'],
                'correcta' => '1939'
            ],
            [
                'pregunta' => '¿Quién fue el primer emperador romano?',
                'opciones' => ['Julio César', 'Augusto', 'Nerón', 'Trajano'],
                'correcta' => 'Augusto'
            ],
            [
                'pregunta' => '¿Qué civilización construyó Machu Picchu?',
                'opciones' => ['Mayas', 'Aztecas', 'Incas', 'Olmecas'],
                'correcta' => 'Incas'
            ],
            [
                'pregunta' => '¿Dónde ocurrió la Revolución Francesa?',
                'opciones' => ['España', 'Francia', 'Italia', 'Portugal'],
                'correcta' => 'Francia'
            ],
            [
                'pregunta' => '¿Quién descubrió América?',
                'opciones' => ['Cristóbal Colón', 'Magallanes', 'Marco Polo', 'Vespucci'],
                'correcta' => 'Cristóbal Colón'
            ]
        ];

        return $this->cargarVista($preguntas, "Historia");
    }

    public function ciencia()
    {
        $preguntas = [
            [
                'pregunta' => '¿Qué planeta es conocido como el planeta rojo?',
                'opciones' => ['Marte', 'Venus', 'Júpiter', 'Saturno'],
                'correcta' => 'Marte'
            ],
            [
                'pregunta' => '¿Cuál es la molécula encargada de transportar oxígeno en la sangre?',
                'opciones' => ['Hemoglobina', 'Insulina', 'Glucosa', 'ADN'],
                'correcta' => 'Hemoglobina'
            ],
            [
                'pregunta' => '¿Cuál es la fuerza que nos mantiene en la Tierra?',
                'opciones' => ['Fricción', 'Magnetismo', 'Gravedad', 'Energía cinética'],
                'correcta' => 'Gravedad'
            ],
            [
                'pregunta' => '¿Qué gas abunda más en la atmósfera?',
                'opciones' => ['Oxígeno', 'Nitrógeno', 'CO2', 'Helio'],
                'correcta' => 'Nitrógeno'
            ],
            [
                'pregunta' => '¿Qué científico propuso la teoría de la evolución?',
                'opciones' => ['Newton', 'Einstein', 'Darwin', 'Tesla'],
                'correcta' => 'Darwin'
            ]
        ];

        return $this->cargarVista($preguntas, "Ciencia");
    }

    public function matematicas()
    {
        $preguntas = [
            [
                'pregunta' => '¿Cuánto es 12 × 8?',
                'opciones' => ['96', '88', '102', '108'],
                'correcta' => '96'
            ],
            [
                'pregunta' => '¿Qué es un número primo?',
                'opciones' => ['Múltiplo de 2', 'Solo divisible por 1 y él mismo', 'Número par', 'Número negativo'],
                'correcta' => 'Solo divisible por 1 y él mismo'
            ],
            [
                'pregunta' => '¿Cuánto es la raíz cuadrada de 144?',
                'opciones' => ['10', '11', '12', '14'],
                'correcta' => '12'
            ],
            [
                'pregunta' => '¿Qué tipo de ángulo mide 90°?',
                'opciones' => ['Obtuso', 'Recto', 'Agudo', 'Llano'],
                'correcta' => 'Recto'
            ],
            [
                'pregunta' => '¿Qué rama estudia las formas y figuras?',
                'opciones' => ['Álgebra', 'Geometría', 'Aritmética', 'Trigonometría'],
                'correcta' => 'Geometría'
            ]
        ];

        return $this->cargarVista($preguntas, "Matemáticas");
    }

    public function tecnologia()
    {
        $preguntas = [
            [
                'pregunta' => '¿Qué significa CPU?',
                'opciones' => ['Control Process Unit', 'Central Processing Unit', 'Central Power User', 'Core Processor Utility'],
                'correcta' => 'Central Processing Unit'
            ],
            [
                'pregunta' => '¿Qué empresa creó el sistema operativo Windows?',
                'opciones' => ['Apple', 'IBM', 'Microsoft', 'Intel'],
                'correcta' => 'Microsoft'
            ],
            [
                'pregunta' => '¿Qué es un algoritmo?',
                'opciones' => ['Un lenguaje', 'Una receta de pasos', 'Un virus', 'Una memoria USB'],
                'correcta' => 'Una receta de pasos'
            ],
            [
                'pregunta' => '¿Qué extensión tienen los archivos ejecutables en Windows?',
                'opciones' => ['.exe', '.jpg', '.pdf', '.bat'],
                'correcta' => '.exe'
            ],
            [
                'pregunta' => '¿Cuál es el lenguaje principal para web?',
                'opciones' => ['C++', 'Java', 'PHP', 'HTML'],
                'correcta' => 'HTML'
            ]
        ];

        return $this->cargarVista($preguntas, "Tecnología");
    }

    public function geografia()
    {
        $preguntas = [
            [
                'pregunta' => '¿Cuál es el río más largo del mundo?',
                'opciones' => ['Nilo', 'Amazonas', 'Yangtsé', 'Mississippi'],
                'correcta' => 'Amazonas'
            ],
            [
                'pregunta' => '¿Cuál es el país más grande?',
                'opciones' => ['China', 'Rusia', 'Canada', 'Brasil'],
                'correcta' => 'Rusia'
            ],
            [
                'pregunta' => '¿En qué continente está Egipto?',
                'opciones' => ['Asia', 'Europa', 'América', 'África'],
                'correcta' => 'África'
            ],
            [
                'pregunta' => '¿Cuál es la capital de Japón?',
                'opciones' => ['Osaka', 'Kyoto', 'Tokio', 'Hiroshima'],
                'correcta' => 'Tokio'
            ],
            [
                'pregunta' => '¿Cuál es el océano más grande?',
                'opciones' => ['Atlántico', 'Pacífico', 'Índico', 'Ártico'],
                'correcta' => 'Pacífico'
            ]
        ];

        return $this->cargarVista($preguntas, "Geografía");
    }

    public function arte()
    {
        $preguntas = [
            [
                'pregunta' => '¿Quién pintó La Mona Lisa?',
                'opciones' => ['Picasso', 'Van Gogh', 'Da Vinci', 'Dalí'],
                'correcta' => 'Da Vinci'
            ],
            [
                'pregunta' => '¿Qué país es la cuna del tango?',
                'opciones' => ['Brasil', 'Argentina', 'México', 'Chile'],
                'correcta' => 'Argentina'
            ],
            [
                'pregunta' => '¿Qué obra escribió Shakespeare?',
                'opciones' => ['La Odisea', 'Hamlet', 'Don Quijote', 'La Iliada'],
                'correcta' => 'Hamlet'
            ],
            [
                'pregunta' => '¿Dónde nació Mozart?',
                'opciones' => ['Alemania', 'Austria', 'España', 'Italia'],
                'correcta' => 'Austria'
            ],
            [
                'pregunta' => '¿Qué cultura construyó las pirámides?',
                'opciones' => ['Romanos', 'Egipcios', 'Griegos', 'Persas'],
                'correcta' => 'Egipcios'
            ]
        ];

        return $this->cargarVista($preguntas, "Arte y Cultura");
    }

    public function retos()
    {
        $preguntas = [
            [
                'pregunta' => '¿Resolver: 25 + 37?',
                'opciones' => ['52', '60', '62', '55'],
                'correcta' => '62'
            ],
            [
                'pregunta' => '¿Cuál es el símbolo químico del oro?',
                'opciones' => ['Au', 'Ag', 'O', 'Go'],
                'correcta' => 'Au'
            ],
            [
                'pregunta' => '¿Qué país ganó el Mundial 2010?',
                'opciones' => ['Portugal', 'España', 'Alemania', 'Italia'],
                'correcta' => 'España'
            ],
            [
                'pregunta' => '¿Qué figura tiene 4 lados iguales?',
                'opciones' => ['Rectángulo', 'Cuadrado', 'Romboide', 'Trapecio'],
                'correcta' => 'Cuadrado'
            ],
            [
                'pregunta' => '¿Cuántos días tiene un año bisiesto?',
                'opciones' => ['364', '365', '366', '367'],
                'correcta' => '366'
            ]
        ];

        return $this->cargarVista($preguntas, "Retos diarios");
    }
}
