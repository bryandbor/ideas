/*** @jsx React.DOM */

var content = React.createClass({
    render: function() {
        return(
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                        </div>
                    </div>
                </div>
            </div>
        );
    }
});

React.renderComponent (
    <content />,
    document.getElementById('content')
);