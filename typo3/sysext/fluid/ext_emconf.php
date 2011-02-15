<?php

########################################################################
# Extension Manager/Repository config file for ext "fluid".
#
# Auto generated 26-01-2011 09:13
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Fluid Templating Engine',
	'description' => 'Fluid is a next-generation templating engine which makes the life of extension authors a lot easier!',
	'category' => 'fe',
	'author' => 'Sebastian Kurfürst, Bastian Waidelich',
	'author_email' => 'sebastian@typo3.org, bastian@typo3.org',
	'shy' => '',
	'dependencies' => 'extbase',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.4.0-devel',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:224:{s:13:"ChangeLog.txt";s:4:"5e51";s:16:"ext_autoload.php";s:4:"8641";s:12:"ext_icon.gif";s:4:"e922";s:14:"ext_tables.php";s:4:"344b";s:24:"ext_typoscript_setup.txt";s:4:"b410";s:21:"Classes/Exception.php";s:4:"7373";s:17:"Classes/Fluid.php";s:4:"ac13";s:49:"Classes/Compatibility/DocbookGeneratorService.php";s:4:"84b6";s:47:"Classes/Compatibility/TemplateParserBuilder.php";s:4:"617b";s:26:"Classes/Core/Exception.php";s:4:"79b3";s:37:"Classes/Core/Parser/Configuration.php";s:4:"ab36";s:33:"Classes/Core/Parser/Exception.php";s:4:"1cbd";s:44:"Classes/Core/Parser/InterceptorInterface.php";s:4:"28a6";s:47:"Classes/Core/Parser/ParsedTemplateInterface.php";s:4:"17a1";s:36:"Classes/Core/Parser/ParsingState.php";s:4:"6677";s:38:"Classes/Core/Parser/TemplateParser.php";s:4:"d4cf";s:42:"Classes/Core/Parser/Interceptor/Escape.php";s:4:"4db0";s:47:"Classes/Core/Parser/SyntaxTree/AbstractNode.php";s:4:"a57e";s:44:"Classes/Core/Parser/SyntaxTree/ArrayNode.php";s:4:"b123";s:48:"Classes/Core/Parser/SyntaxTree/NodeInterface.php";s:4:"1a31";s:53:"Classes/Core/Parser/SyntaxTree/ObjectAccessorNode.php";s:4:"fec4";s:65:"Classes/Core/Parser/SyntaxTree/RenderingContextAwareInterface.php";s:4:"68ab";s:43:"Classes/Core/Parser/SyntaxTree/RootNode.php";s:4:"6b59";s:43:"Classes/Core/Parser/SyntaxTree/TextNode.php";s:4:"7ce2";s:49:"Classes/Core/Parser/SyntaxTree/ViewHelperNode.php";s:4:"c992";s:43:"Classes/Core/Rendering/RenderingContext.php";s:4:"169b";s:52:"Classes/Core/Rendering/RenderingContextInterface.php";s:4:"29bb";s:55:"Classes/Core/ViewHelper/AbstractConditionViewHelper.php";s:4:"1b02";s:54:"Classes/Core/ViewHelper/AbstractTagBasedViewHelper.php";s:4:"7560";s:46:"Classes/Core/ViewHelper/AbstractViewHelper.php";s:4:"8c70";s:46:"Classes/Core/ViewHelper/ArgumentDefinition.php";s:4:"c4d5";s:37:"Classes/Core/ViewHelper/Arguments.php";s:4:"8553";s:37:"Classes/Core/ViewHelper/Exception.php";s:4:"f1d0";s:46:"Classes/Core/ViewHelper/TagBasedViewHelper.php";s:4:"b234";s:38:"Classes/Core/ViewHelper/TagBuilder.php";s:4:"1e21";s:53:"Classes/Core/ViewHelper/TemplateVariableContainer.php";s:4:"b576";s:47:"Classes/Core/ViewHelper/ViewHelperInterface.php";s:4:"8274";s:55:"Classes/Core/ViewHelper/ViewHelperVariableContainer.php";s:4:"f6b8";s:62:"Classes/Core/ViewHelper/Exception/InvalidVariableException.php";s:4:"6dd4";s:76:"Classes/Core/ViewHelper/Exception/RenderingContextNotAccessibleException.php";s:4:"bbb7";s:59:"Classes/Core/ViewHelper/Facets/ChildNodeAccessInterface.php";s:4:"7ec9";s:53:"Classes/Core/ViewHelper/Facets/PostParseInterface.php";s:4:"35d5";s:48:"Classes/Core/Widget/AbstractWidgetController.php";s:4:"5466";s:48:"Classes/Core/Widget/AbstractWidgetViewHelper.php";s:4:"fa90";s:47:"Classes/Core/Widget/AjaxWidgetContextHolder.php";s:4:"4658";s:33:"Classes/Core/Widget/Bootstrap.php";s:4:"b8db";s:33:"Classes/Core/Widget/Exception.php";s:4:"a6e3";s:37:"Classes/Core/Widget/WidgetContext.php";s:4:"305f";s:37:"Classes/Core/Widget/WidgetRequest.php";s:4:"0ff7";s:44:"Classes/Core/Widget/WidgetRequestBuilder.php";s:4:"cf2b";s:44:"Classes/Core/Widget/WidgetRequestHandler.php";s:4:"c616";s:60:"Classes/Core/Widget/Exception/MissingControllerException.php";s:4:"5b77";s:67:"Classes/Core/Widget/Exception/RenderingContextNotFoundException.php";s:4:"a31b";s:64:"Classes/Core/Widget/Exception/WidgetContextNotFoundException.php";s:4:"ffc2";s:64:"Classes/Core/Widget/Exception/WidgetRequestNotFoundException.php";s:4:"7ce2";s:36:"Classes/Service/DocbookGenerator.php";s:4:"c6a5";s:37:"Classes/View/AbstractTemplateView.php";s:4:"ef25";s:26:"Classes/View/Exception.php";s:4:"4168";s:31:"Classes/View/StandaloneView.php";s:4:"4ac9";s:29:"Classes/View/TemplateView.php";s:4:"b3c5";s:50:"Classes/View/Exception/InvalidSectionException.php";s:4:"6cb2";s:59:"Classes/View/Exception/InvalidTemplateResourceException.php";s:4:"d589";s:39:"Classes/ViewHelpers/AliasViewHelper.php";s:4:"06f9";s:38:"Classes/ViewHelpers/BaseViewHelper.php";s:4:"a23f";s:41:"Classes/ViewHelpers/CObjectViewHelper.php";s:4:"b8b2";s:39:"Classes/ViewHelpers/CountViewHelper.php";s:4:"140f";s:39:"Classes/ViewHelpers/CycleViewHelper.php";s:4:"defe";s:39:"Classes/ViewHelpers/DebugViewHelper.php";s:4:"b611";s:38:"Classes/ViewHelpers/ElseViewHelper.php";s:4:"cdde";s:40:"Classes/ViewHelpers/EscapeViewHelper.php";s:4:"bf87";s:47:"Classes/ViewHelpers/FlashMessagesViewHelper.php";s:4:"dbb0";s:37:"Classes/ViewHelpers/ForViewHelper.php";s:4:"54de";s:38:"Classes/ViewHelpers/FormViewHelper.php";s:4:"d1e7";s:44:"Classes/ViewHelpers/GroupedForViewHelper.php";s:4:"e37a";s:36:"Classes/ViewHelpers/IfViewHelper.php";s:4:"aa56";s:39:"Classes/ViewHelpers/ImageViewHelper.php";s:4:"d12c";s:40:"Classes/ViewHelpers/LayoutViewHelper.php";s:4:"ac35";s:48:"Classes/ViewHelpers/RenderChildrenViewHelper.php";s:4:"218b";s:53:"Classes/ViewHelpers/RenderFlashMessagesViewHelper.php";s:4:"3e52";s:40:"Classes/ViewHelpers/RenderViewHelper.php";s:4:"3a8a";s:41:"Classes/ViewHelpers/SectionViewHelper.php";s:4:"c4fa";s:38:"Classes/ViewHelpers/ThenViewHelper.php";s:4:"de0c";s:43:"Classes/ViewHelpers/TranslateViewHelper.php";s:4:"e9b6";s:52:"Classes/ViewHelpers/Be/AbstractBackendViewHelper.php";s:4:"0b21";s:46:"Classes/ViewHelpers/Be/ContainerViewHelper.php";s:4:"0b13";s:45:"Classes/ViewHelpers/Be/PageInfoViewHelper.php";s:4:"2a33";s:45:"Classes/ViewHelpers/Be/PagePathViewHelper.php";s:4:"7bd7";s:46:"Classes/ViewHelpers/Be/TableListViewHelper.php";s:4:"13c5";s:48:"Classes/ViewHelpers/Be/Buttons/CshViewHelper.php";s:4:"1189";s:49:"Classes/ViewHelpers/Be/Buttons/IconViewHelper.php";s:4:"0ef2";s:53:"Classes/ViewHelpers/Be/Buttons/ShortcutViewHelper.php";s:4:"8b35";s:57:"Classes/ViewHelpers/Be/Menus/ActionMenuItemViewHelper.php";s:4:"3798";s:53:"Classes/ViewHelpers/Be/Menus/ActionMenuViewHelper.php";s:4:"e44d";s:61:"Classes/ViewHelpers/Be/Security/IfAuthenticatedViewHelper.php";s:4:"8bc3";s:55:"Classes/ViewHelpers/Be/Security/IfHasRoleViewHelper.php";s:4:"70a0";s:56:"Classes/ViewHelpers/Form/AbstractFormFieldViewHelper.php";s:4:"bcb0";s:51:"Classes/ViewHelpers/Form/AbstractFormViewHelper.php";s:4:"2dc3";s:47:"Classes/ViewHelpers/Form/CheckboxViewHelper.php";s:4:"57b8";s:45:"Classes/ViewHelpers/Form/ErrorsViewHelper.php";s:4:"41d1";s:45:"Classes/ViewHelpers/Form/HiddenViewHelper.php";s:4:"fd4f";s:47:"Classes/ViewHelpers/Form/PasswordViewHelper.php";s:4:"12a0";s:44:"Classes/ViewHelpers/Form/RadioViewHelper.php";s:4:"d39f";s:45:"Classes/ViewHelpers/Form/SelectViewHelper.php";s:4:"fd6c";s:45:"Classes/ViewHelpers/Form/SubmitViewHelper.php";s:4:"ee63";s:47:"Classes/ViewHelpers/Form/TextareaViewHelper.php";s:4:"dd77";s:46:"Classes/ViewHelpers/Form/TextboxViewHelper.php";s:4:"7c6d";s:48:"Classes/ViewHelpers/Form/TextfieldViewHelper.php";s:4:"8dd7";s:45:"Classes/ViewHelpers/Form/UploadViewHelper.php";s:4:"9b9e";s:45:"Classes/ViewHelpers/Format/CropViewHelper.php";s:4:"02f6";s:49:"Classes/ViewHelpers/Format/CurrencyViewHelper.php";s:4:"4911";s:45:"Classes/ViewHelpers/Format/DateViewHelper.php";s:4:"1eb1";s:45:"Classes/ViewHelpers/Format/HtmlViewHelper.php";s:4:"5358";s:46:"Classes/ViewHelpers/Format/Nl2brViewHelper.php";s:4:"485e";s:47:"Classes/ViewHelpers/Format/NumberViewHelper.php";s:4:"4df4";s:48:"Classes/ViewHelpers/Format/PaddingViewHelper.php";s:4:"df5a";s:47:"Classes/ViewHelpers/Format/PrintfViewHelper.php";s:4:"7a95";s:45:"Classes/ViewHelpers/Link/ActionViewHelper.php";s:4:"1c8d";s:44:"Classes/ViewHelpers/Link/EmailViewHelper.php";s:4:"d83a";s:47:"Classes/ViewHelpers/Link/ExternalViewHelper.php";s:4:"e02d";s:43:"Classes/ViewHelpers/Link/PageViewHelper.php";s:4:"b6bc";s:58:"Classes/ViewHelpers/Security/IfAuthenticatedViewHelper.php";s:4:"b675";s:52:"Classes/ViewHelpers/Security/IfHasRoleViewHelper.php";s:4:"365b";s:44:"Classes/ViewHelpers/Uri/ActionViewHelper.php";s:4:"0bb9";s:43:"Classes/ViewHelpers/Uri/EmailViewHelper.php";s:4:"3ac1";s:46:"Classes/ViewHelpers/Uri/ExternalViewHelper.php";s:4:"716b";s:43:"Classes/ViewHelpers/Uri/ImageViewHelper.php";s:4:"2e43";s:42:"Classes/ViewHelpers/Uri/PageViewHelper.php";s:4:"1a59";s:46:"Classes/ViewHelpers/Uri/ResourceViewHelper.php";s:4:"d2d7";s:53:"Classes/ViewHelpers/Widget/AutocompleteViewHelper.php";s:4:"8a67";s:45:"Classes/ViewHelpers/Widget/LinkViewHelper.php";s:4:"205e";s:49:"Classes/ViewHelpers/Widget/PaginateViewHelper.php";s:4:"7a5d";s:44:"Classes/ViewHelpers/Widget/UriViewHelper.php";s:4:"d933";s:64:"Classes/ViewHelpers/Widget/Controller/AutocompleteController.php";s:4:"2983";s:60:"Classes/ViewHelpers/Widget/Controller/PaginateController.php";s:4:"1573";s:34:"Configuration/TypoScript/setup.txt";s:4:"0e30";s:70:"Resources/Private/Templates/ViewHelpers/Widget/Autocomplete/Index.html";s:4:"b955";s:66:"Resources/Private/Templates/ViewHelpers/Widget/Paginate/Index.html";s:4:"55a2";s:43:"Tests/Unit/Core/Fixtures/TestViewHelper.php";s:4:"253f";s:43:"Tests/Unit/Core/Parser/ParsingStateTest.php";s:4:"c6e2";s:52:"Tests/Unit/Core/Parser/TemplateParserPatternTest.php";s:4:"b6b3";s:45:"Tests/Unit/Core/Parser/TemplateParserTest.php";s:4:"4c00";s:66:"Tests/Unit/Core/Parser/Fixtures/ChildNodeAccessFacetViewHelper.php";s:4:"01d1";s:60:"Tests/Unit/Core/Parser/Fixtures/PostParseFacetViewHelper.php";s:4:"4546";s:79:"Tests/Unit/Core/Parser/Fixtures/TemplateParserTestFixture01-shorthand-split.php";s:4:"ea3a";s:74:"Tests/Unit/Core/Parser/Fixtures/TemplateParserTestFixture01-shorthand.html";s:4:"e949";s:69:"Tests/Unit/Core/Parser/Fixtures/TemplateParserTestFixture06-split.php";s:4:"33ba";s:64:"Tests/Unit/Core/Parser/Fixtures/TemplateParserTestFixture06.html";s:4:"92c2";s:69:"Tests/Unit/Core/Parser/Fixtures/TemplateParserTestFixture14-split.php";s:4:"bd4b";s:64:"Tests/Unit/Core/Parser/Fixtures/TemplateParserTestFixture14.html";s:4:"1ec8";s:49:"Tests/Unit/Core/Parser/Interceptor/EscapeTest.php";s:4:"b474";s:54:"Tests/Unit/Core/Parser/SyntaxTree/AbstractNodeTest.php";s:4:"48a5";s:50:"Tests/Unit/Core/Parser/SyntaxTree/TextNodeTest.php";s:4:"4fcd";s:66:"Tests/Unit/Core/Parser/SyntaxTree/ViewHelperNodeComparatorTest.php";s:4:"33f3";s:56:"Tests/Unit/Core/Parser/SyntaxTree/ViewHelperNodeTest.php";s:4:"e12f";s:50:"Tests/Unit/Core/Rendering/RenderingContextTest.php";s:4:"ca8f";s:61:"Tests/Unit/Core/ViewHelper/AbstractTagBasedViewHelperTest.php";s:4:"cb07";s:53:"Tests/Unit/Core/ViewHelper/AbstractViewHelperTest.php";s:4:"f9cf";s:53:"Tests/Unit/Core/ViewHelper/ArgumentDefinitionTest.php";s:4:"3b5c";s:54:"Tests/Unit/Core/ViewHelper/ConditionViewHelperTest.php";s:4:"66d7";s:45:"Tests/Unit/Core/ViewHelper/TagBuilderTest.php";s:4:"63af";s:60:"Tests/Unit/Core/ViewHelper/TemplateVariableContainerTest.php";s:4:"641f";s:62:"Tests/Unit/Core/ViewHelper/ViewHelperVariableContainerTest.php";s:4:"e521";s:55:"Tests/Unit/Core/Widget/AbstractWidgetControllerTest.php";s:4:"b2b6";s:55:"Tests/Unit/Core/Widget/AbstractWidgetViewHelperTest.php";s:4:"e4ea";s:54:"Tests/Unit/Core/Widget/AjaxWidgetContextHolderTest.php";s:4:"305b";s:44:"Tests/Unit/Core/Widget/WidgetContextTest.php";s:4:"0c7b";s:51:"Tests/Unit/Core/Widget/WidgetRequestBuilderTest.php";s:4:"440c";s:51:"Tests/Unit/Core/Widget/WidgetRequestHandlerTest.php";s:4:"81fe";s:44:"Tests/Unit/Core/Widget/WidgetRequestTest.php";s:4:"4a31";s:44:"Tests/Unit/View/AbstractTemplateViewTest.php";s:4:"357a";s:38:"Tests/Unit/View/StandaloneViewTest.php";s:4:"faba";s:36:"Tests/Unit/View/TemplateViewTest.php";s:4:"2e9e";s:38:"Tests/Unit/View/Fixtures/LayoutFixture";s:4:"85d8";s:43:"Tests/Unit/View/Fixtures/LayoutFixture.html";s:4:"cca1";s:42:"Tests/Unit/View/Fixtures/LayoutFixture.xml";s:4:"85be";s:51:"Tests/Unit/View/Fixtures/StandaloneViewFixture.html";s:4:"8952";s:48:"Tests/Unit/View/Fixtures/TemplateViewFixture.php";s:4:"79e8";s:56:"Tests/Unit/View/Fixtures/TemplateViewSectionFixture.html";s:4:"aa5f";s:54:"Tests/Unit/View/Fixtures/TransparentSyntaxTreeNode.php";s:4:"eb0d";s:53:"Tests/Unit/View/Fixtures/UnparsedTemplateFixture.html";s:4:"59dd";s:46:"Tests/Unit/ViewHelpers/AliasViewHelperTest.php";s:4:"4906";s:45:"Tests/Unit/ViewHelpers/BaseViewHelperTest.php";s:4:"ddfb";s:46:"Tests/Unit/ViewHelpers/CountViewHelperTest.php";s:4:"3317";s:46:"Tests/Unit/ViewHelpers/CycleViewHelperTest.php";s:4:"c976";s:45:"Tests/Unit/ViewHelpers/ElseViewHelperTest.php";s:4:"0d90";s:44:"Tests/Unit/ViewHelpers/ForViewHelperTest.php";s:4:"3666";s:45:"Tests/Unit/ViewHelpers/FormViewHelperTest.php";s:4:"6764";s:51:"Tests/Unit/ViewHelpers/GroupedForViewHelperTest.php";s:4:"8f37";s:43:"Tests/Unit/ViewHelpers/IfViewHelperTest.php";s:4:"25b8";s:55:"Tests/Unit/ViewHelpers/RenderChildrenViewHelperTest.php";s:4:"c652";s:47:"Tests/Unit/ViewHelpers/RenderViewHelperTest.php";s:4:"02d2";s:45:"Tests/Unit/ViewHelpers/ThenViewHelperTest.php";s:4:"360c";s:49:"Tests/Unit/ViewHelpers/ViewHelperBaseTestcase.php";s:4:"2696";s:59:"Tests/Unit/ViewHelpers/Be/IfAuthenticatedViewHelperTest.php";s:4:"14d1";s:53:"Tests/Unit/ViewHelpers/Be/IfHasRoleViewHelperTest.php";s:4:"cec2";s:60:"Tests/Unit/ViewHelpers/Fixtures/ConstraintSyntaxTreeNode.php";s:4:"dd45";s:46:"Tests/Unit/ViewHelpers/Fixtures/IfFixture.html";s:4:"8458";s:54:"Tests/Unit/ViewHelpers/Fixtures/IfThenElseFixture.html";s:4:"62f0";s:63:"Tests/Unit/ViewHelpers/Form/AbstractFormFieldViewHelperTest.php";s:4:"edca";s:58:"Tests/Unit/ViewHelpers/Form/AbstractFormViewHelperTest.php";s:4:"32bd";s:54:"Tests/Unit/ViewHelpers/Form/CheckboxViewHelperTest.php";s:4:"2b87";s:52:"Tests/Unit/ViewHelpers/Form/ErrorsViewHelperTest.php";s:4:"6729";s:52:"Tests/Unit/ViewHelpers/Form/HiddenViewHelperTest.php";s:4:"60a9";s:51:"Tests/Unit/ViewHelpers/Form/RadioViewHelperTest.php";s:4:"d185";s:52:"Tests/Unit/ViewHelpers/Form/SelectViewHelperTest.php";s:4:"f361";s:52:"Tests/Unit/ViewHelpers/Form/SubmitViewHelperTest.php";s:4:"8857";s:54:"Tests/Unit/ViewHelpers/Form/TextareaViewHelperTest.php";s:4:"219b";s:53:"Tests/Unit/ViewHelpers/Form/TextboxViewHelperTest.php";s:4:"f257";s:52:"Tests/Unit/ViewHelpers/Form/UploadViewHelperTest.php";s:4:"b6b2";s:60:"Tests/Unit/ViewHelpers/Form/Fixtures/EmptySyntaxTreeNode.php";s:4:"9dca";s:64:"Tests/Unit/ViewHelpers/Form/Fixtures/Fixture_UserDomainClass.php";s:4:"494c";s:52:"Tests/Unit/ViewHelpers/Format/CropViewHelperTest.php";s:4:"15e4";s:56:"Tests/Unit/ViewHelpers/Format/CurrencyViewHelperTest.php";s:4:"511c";s:52:"Tests/Unit/ViewHelpers/Format/DateViewHelperTest.php";s:4:"3348";s:53:"Tests/Unit/ViewHelpers/Format/Nl2brViewHelperTest.php";s:4:"7ceb";s:54:"Tests/Unit/ViewHelpers/Format/NumberViewHelperTest.php";s:4:"870f";s:55:"Tests/Unit/ViewHelpers/Format/PaddingViewHelperTest.php";s:4:"7e5a";s:54:"Tests/Unit/ViewHelpers/Format/PrintfViewHelperTest.php";s:4:"5f84";s:51:"Tests/Unit/ViewHelpers/Link/EmailViewHelperTest.php";s:4:"8d09";s:54:"Tests/Unit/ViewHelpers/Link/ExternalViewHelperTest.php";s:4:"9571";s:65:"Tests/Unit/ViewHelpers/Security/IfAuthenticatedViewHelperTest.php";s:4:"af2a";s:59:"Tests/Unit/ViewHelpers/Security/IfHasRoleViewHelperTest.php";s:4:"5722";s:50:"Tests/Unit/ViewHelpers/Uri/EmailViewHelperTest.php";s:4:"0b80";s:53:"Tests/Unit/ViewHelpers/Uri/ExternalViewHelperTest.php";s:4:"5405";}',
	'suggests' => array(
	),
);

?>