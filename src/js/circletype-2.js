import CircleType from `circletype`

// Instantiate `CircleType` with an HTML element.
const circleType = new CircleType(document.getElementById('in_current_issue'));

// Set the text radius and direction. Note: setter methods are chainable.
circleType.radius(200).dir(-1);
new CircleType(document.getElementById('in_current_issue'))
  .radius(384);

// Provide your own splitter function to handle emojis
// @see https://github.com/orling/grapheme-splitter
const splitter = new GraphemeSplitter()
new CircleType(
  document.getElementById('myElement'),
  splitter.splitGraphemes.bind(splitter)
);