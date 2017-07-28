<?php

namespace App\Http\Controllers;

use App\ActionPlan;
use App\ResearchWork;
use App\Resources;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    /**
     * This method call the overview page in the resource folder
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        $resources = Resources::orderBy('id', 'desc')->get();

       return view('members.resources.overview', compact('resources'));
    }

    /**
     * This method calls the createResource page where an action plan is made
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {
        return view('members.resources.createResource');
    }

    /**
     * Handles storing resource form data to the db
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        // validation
        $this->validate($request, [
            'resourceTitle' => 'required|max:50',
            'resourceType' => 'required',
            'resourceBody' => 'required'
        ]);

        Resources::create([
            'resourceTitle' => $request->resourceTitle,
            'resourceType' => $request->resourceType,
            'resourceBody' => $request->resourceBody
        ]);

        // redirects to article page with success msg
        return redirect('/members/resources')->with('status', 'Action plan was successfully created!');
    }

    /**
     * Gets the article to be viewed from the db and recent articles
     * based on posted date
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($id){
        $resource = Resources::where('id', $id)->firstOrFail();

        return view('members.resources.resourceView', compact('resource'));
    }


    /**
     * Gets the edit form
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $resource = Resources::find($id);

        return view('members.resources.resourceEdit', compact('resource'));
    }

    /**
     * Updates the article
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id){

        // validation
        $this->validate($request, [
            'resourceTitle' => 'required',
            'resourceType' => 'required',
            'resourceBody' => 'required'
        ]);

        // Finds the appropriate record with this -> id
        $resource = Resources::findOrFail($id);

        $resource->update($request->all()); // updates the article

        return redirect('/members/resource/view/'.$id)
            ->with('status', 'Resource has been successfully been updated!!');
    }

    /**
     * Handles deleting of a resource from the db
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id){
        // this gets the records from the db
        $resource = Resources::where('id', $id)->first();

        $resource->delete(); // deletes the article in the database

        return redirect()->back()->with('status', 'The Resource has been deleted successfully!!');
    }

    // ****** The following methods handle actions for the web view ****** \\

    /**
     * Handles the displaying of the action plan to the webview
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function displayActionPlan(){
        $actionPlan = Resources::where('resourceType', 'Action Plan')->orderBy('created_at', 'desc')->first();

        // trim function

        return view('web view.actionPlan')->with('actionPlan', $actionPlan);
    }

    /**
     * Handles the displaying of the action plan to the webview
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function displayResearchWork(){
        $research = Resources::where('resourceType', 'Research Work')->orderBy('created_at', 'desc')->first();

        // trim function

        return view('web view.researchPlan')->with('research', $research);
    }

}
