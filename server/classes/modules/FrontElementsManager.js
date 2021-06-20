import RootComponent from "../../../resources/modules/editor/src/js/components/RootComponent";
import HeadingWidget from "../../../resources/modules/editor/src/js/components/widgets/HeadingWidget";
import SectionComponent from "../../../resources/modules/editor/src/js/components/SectionComponent";
import ColumnComponent from "../../../resources/modules/editor/src/js/components/ColumnComponent";
// import InputWidget from "../../../resources/modules/editor/src/js/components/widgets/InputWidget";
import ButtonWidget from "../../../resources/modules/editor/src/js/components/widgets/ButtonWidget";
import TextWidget from "../../../resources/modules/editor/src/js/components/widgets/TextWidget";
import ImageWidget from "../../../resources/modules/editor/src/js/components/widgets/ImageWidget";
import TableWidget from "../../../resources/modules/editor/src/js/components/widgets/TableWidget";
// import NavWidget from "../../../resources/modules/editor/src/js/components/widgets/NavWidget";
import DividerWidget from "../../../resources/modules/editor/src/js/components/widgets/DividerWidget";
import TabsWidget from "../../../resources/modules/editor/src/js/components/widgets/TabsWidget";
import PosterWidget from "../../../resources/modules/editor/src/js/components/widgets/PosterWidget";
import ListWidget from "../../../resources/modules/editor/src/js/components/widgets/ListWidget";
import AccordionWidget from "../../../resources/modules/editor/src/js/components/widgets/AccordionWidget";
import CarouselWidget from "../../../resources/modules/editor/src/js/components/widgets/CarouselWidget";
// import MapWidget from "../../../resources/modules/editor/src/js/components/widgets/MapWidget";
// import MapConstructorWidget from "../../../resources/modules/editor/src/js/components/widgets/MapConstructorWidget";
// import DiagramWidget from "../../../resources/modules/editor/src/js/components/widgets/DiagramWidget";
// import DashboardsWidget from "../../../resources/modules/editor/src/js/components/widgets/DashboardsWidget";
import PostsWidget from "../../../resources/modules/editor/src/js/components/widgets/PostsWidget";
// import IconWidget from "../../../resources/modules/editor/src/js/components/widgets/IconWidget";
// import TourGuide from "../../../resources/modules/editor/src/js/components/widgets/TourGuide";
// import ExportPanelWindget from "../../../resources/modules/editor/src/js/components/widgets/ExportPanelWidget";
import HtmlWidget from "../../../resources/modules/editor/src/js/components/widgets/HtmlWidget";
// import TemplateWidget from "../../../resources/modules/editor/src/js/components/widgets/TemplateWidget";
// import GalleryWidget from "../../../resources/modules/editor/src/js/components/widgets/GalleryWidget";
import VideoWidget from "../../../resources/modules/editor/src/js/components/widgets/VideoWidget";
// import Skeleton from "../../../resources/modules/editor/src/js/components/altrp-image/Skeleton";
import SkeletonPlaceholder from "../components/SkeletonPlaceholder";
// import MenuWidget from "../../../resources/modules/editor/src/js/components/widgets/MenuWidget";

class FrontElementsManager {
  constructor() {
    //список компонентов
    this.components = {};
    this.components["root-element"] = RootComponent;
    this.components["heading"] = HeadingWidget;
    this.components["section"] = SectionComponent;
    this.components["column"] = ColumnComponent;
    this.components["input"] = SkeletonPlaceholder;
    this.components["button"] = ButtonWidget;
    this.components["text"] = TextWidget;
    this.components["image"] = ImageWidget;
    this.components["table"] = TableWidget;
    this.components["posts"] = PostsWidget;
    this.components["nav"] = SkeletonPlaceholder;
    this.components["divider"] = DividerWidget;
    this.components["tabs"] = TabsWidget;
    this.components["poster"] = PosterWidget;
    this.components["list"] = ListWidget;
    this.components["accordion"] = AccordionWidget;
    this.components["carousel"] = CarouselWidget;
    this.components["map"] = SkeletonPlaceholder;
    this.components["map_builder"] = SkeletonPlaceholder;
    this.components["menu"] = SkeletonPlaceholder;
    this.components["diagram"] = SkeletonPlaceholder;
    this.components["dashboards"] = SkeletonPlaceholder;
    this.components["tour"] = SkeletonPlaceholder;
    this.components["icon"] = SkeletonPlaceholder;
    this.components["export"] = SkeletonPlaceholder;
    this.components["html"] = HtmlWidget;
    this.components["template"] = SkeletonPlaceholder;
    this.components["gallery"] = SkeletonPlaceholder
    this.components["video"] = VideoWidget;
  }

  getComponentClass(name) {
    if (! this.components[name]) {
      console.error( "Не найден компонент с именем " + name);
    }
    return this.components[name];
  }

  checkElementExists(elementName) {
    return !!this.components[elementName];
  }
}
export default window.frontElementsManager = new FrontElementsManager();

