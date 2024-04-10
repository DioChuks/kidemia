<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TestController extends Controller
{

  public function index()
  {
    $type = 'test';
    return view('taketest', compact('type'));
  }
  public function startNewTest(Request $request)
  {

    // create a new test for the selected subject and its topic(s)
    $subject = $request->input('subject');
    $view = $request->input('view');
    // $topics = $request->input('topics');
    // $assessment_type = $request->input('assessment_type');
    $test_uuid = Str::uuid();
    // then return a json response
    return response()->json([
      'test_id' => $test_uuid,
      'subject_id' => $subject,
      'view' => $view
    ], 201);
  }

  public function test($test): View
  {
    $questions = [
      [
        "question" => "What is the basic unit of life?",
        "answers" => [
          "Organ",
          "Tissue",
          "Cell (Correct)",  // Mark correct answer
          "Molecule"
        ]
      ],
      [
        "question" => "Which organelle is responsible for protein synthesis?",
        "answers" => [
          "Mitochondria",
          "Ribosomes (Correct)",
          "Golgi apparatus",
          "Lysosome"
        ]
      ],
      [
        "question" => "What process converts sunlight into energy usable by plants?",
        "answers" => [
          "Cellular respiration",
          "Photosynthesis (Correct)",
          "Fermentation",
          "Cellular digestion"
        ]
      ],
      [
        "question" => "The transfer of genetic information between parent and offspring is called:",
        "answers" => [
          "Mutation",
          "Heredity (Correct)",
          "Adaptation",
          "Evolution"
        ]
      ],
      [
        "question" => "What is the study of living organisms and their interactions with the environment?",
        "answers" => [
          "Physiology",
          "Ecology (Correct)",
          "Anatomy",
          "Genetics"
        ]
      ],
      [
        "question" => "A close relationship between two species where one benefits and the other is harmed is called:",
        "answers" => [
          "Mutualism",
          "Commensalism",
          "Parasitism (Correct)",
          "Predation"
        ]
      ],
      [
        "question" => "Which of the following is NOT a kingdom of life?",
        "answers" => [
          "Plantae",
          "Animalia",
          "Fungi (Correct)",  // Fungi are now considered a separate kingdom
          "Protista"
        ]
      ],
      [
        "question" => "What molecule carries genetic information in the form of genes?",
        "answers" => [
          "Protein",
          "RNA",
          "DNA (Correct)",
          "Carbohydrate"
        ]
      ],
      [
        "question" => "The backbone of a DNA molecule is made up of:",
        "answers" => [
          "Sugars",
          "Phosphates (Correct)",
          "Proteins",
          "Lipids"
        ]
      ],
      [
        "question" => "The process by which organisms better suit their environment over time is called:",
        "answers" => [
          "Natural selection (Correct)",
          "Artificial selection",
          "Genetic modification",
          "Adaptation"
        ]
      ],
      [
        "question" => "What is the breakdown of glucose to release energy without oxygen?",
        "answers" => [
          "Cellular respiration",
          "Photosynthesis",
          "Fermentation (Correct)",
          "Decomposition"
        ]
      ],
      [
        "question" => "The theory that all living things share a common ancestor is called:",
        "answers" => [
          "Natural selection",
          "Genetic drift",
          "Evolution (Correct)",
          "Adaptation"
        ]
      ],
      [
        "question" => "What is the process by which an organism produces offspring genetically identical to itself?",
        "answers" => [
          "Sexual reproduction",
          "Asexual reproduction (Correct)",
          "Mitosis",
          "Meiosis"
        ]
      ],
      [
        "question" => "Which of the following is NOT a component of the human circulatory system?",
        "answers" => [
          "Heart (Correct)",
          "Lungs",
          "Blood vessels",
          "Blood"
        ]
      ],
      [
        "question" => "The breakdown of food molecules into smaller, usable units is called:",
        "answers" => [
          "Digestion (Correct)",
          "Absorption",
          "Assimilation",
          "Excretion"
        ]
      ],
      [
        "question" => "The process by which waste products are removed from the body is called:",
        "answers" => [
          "Excretion (Correct)",
          "Respiration",
          "Circulation",
          "Digestion"
        ]
      ],
      [
        "question" => "The process by which waste products are removed from the body is called:",
        "answers" => [
          "Excretion (Correct)",
          "Respiration",
          "Circulation",
          "Digestion"
        ]
      ],
      [
        "question" => "The process by which waste products are removed from the body is called:",
        "answers" => [
          "Excretion (Correct)",
          "Respiration",
          "Circulation",
          "Digestion"
        ]
      ],
      [
        "question" => "The process by which waste products are removed from the body is called:",
        "answers" => [
          "Excretion (Correct)",
          "Respiration",
          "Circulation",
          "Digestion"
        ]
      ],
      [
        "question" => "The process by which waste products are removed from the body is called:",
        "answers" => [
          "Excretion (Correct)",
          "Respiration",
          "Circulation",
          "Digestion"
        ]
      ],
    ];

    return view('ongoing-test', compact(['questions', 'test']));
  }

  public function showReadyScreen($id, string $view = 'test', string $readyId): View
  {
    // condition the view type, if test or exam
    if($view === 'test'){
      $viewPage = 'testReadyScreen';
    }else{
      $viewPage = 'examReadyScreen';
    }
    // $id = '39dw3-32932-3fcej-99df2';

    // waiting view for the test id
    // sign the test id for the active status

    // then redirect to the ready screen with test uuid
    return view("dashboard.$viewPage", ['id' => $id, 'type' => $view, 'readyId' => $readyId]);
  }
}
