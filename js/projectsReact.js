alert('testing');

var content = React.createClass({
    render: function() {
        return(
            <div>
                Hello World!
            </div>
        );
    }
});

React.renderComponent(
    Hello World,
    document.getElementById('content')
);