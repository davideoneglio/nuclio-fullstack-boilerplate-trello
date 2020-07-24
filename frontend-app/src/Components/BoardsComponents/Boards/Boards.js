import React from "react";
import List from "../List/List";
import InputContainerList from "../Input/InputContainerLists";
import "./Boards.css";


function Boards({ list }) {

    return (
        <div className="root3">

            {list.map((list) =>
                <List id={list.id} title={list.title} cards={list.cards} />
            )}

            <div>
                <InputContainerList lists={list.title} />
            </div>

        </div>

    );
}
export default Boards;